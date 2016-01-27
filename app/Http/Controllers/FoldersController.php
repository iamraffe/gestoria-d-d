<?php

namespace App\Http\Controllers;

use App\Folder;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;
use Illuminate\Http\Request;

class FoldersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $folder_name = $request->folder_name;

        $parent_folder_id = $request->current_folder;

        $folder_slug = '@'.str_slug($folder_name);

        try {
            $request->user()->folders()->create([
                'parent_folder_id' => $parent_folder_id,
                'slug' => $folder_slug,
                'name' => $folder_name
            ]);



            \File::makeDirectory(public_path('documents/'.$request->user()->slug.'/'.current_folder_path(Folder::find($parent_folder_id)).$folder_slug));
        }catch(\Exception $e){
            return response()->json([
                'message' => 'Folder was not created',
                'description' => $e->getMessage()
            ], 403);
        }

        return response()->json([
            'message' => 'Folder created correctly',
            'description' => 'A folder with the name '.$folder_name.' was created correctly'
        ], 201); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($user_slug, $user_id, $folder_slug, $folder_id)
    {
        $current_folder = Folder::findOrFail($folder_id);
        $user = User::findOrFail($user_id);
        $child_folders = $current_folder->folders()->get();
        return view('folders.show', compact('current_folder','user', 'child_folders'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $folder = Folder::findOrFail($id);

        $old_path = public_path('documents/'.$folder->user()->first()->slug.'/'.current_folder_path(Folder::find($folder->parent_folder_id)).$folder->slug);

        $folder->name = $request->folder_name;

        $folder->slug = '@'.str_slug($request->folder_name);

        try {

            $folder->save();    

            $new_path = 'documents/'.$folder->user()->first()->slug.'/'.current_folder_path(Folder::find($folder->parent_folder_id)).$folder->slug;

            \File::move($old_path, public_path($new_path));

            $collection = $folder->files()->get();

            $collection = $collection->each(function ($file, $key) use($new_path) {
                $file->path = $new_path.'/'.$file->name_on_disk;
                $file->save();
            });

        }catch(\Exception $e){
            return response()->json([
                'message' => 'Folder was not updated',
                'description' => $e->getMessage()
            ], 403);
        }
        return response()->json([
            'message' => 'Folder updated correctly',
            'description' => 'Folder updated correctly'
        ], 201); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $folder = Folder::find($id);  

        try {
            \File::deleteDirectory(public_path('documents/'.$folder->user()->first()->slug.'/'.current_folder_path($folder)));
            $folder->delete();
        }catch(\Exception $e){
            return response()->json([
                'message' => 'Folder was not deleted',
                'description' => $e->getMessage()
            ], 403);
        }
        return response()->json([
            'message' => 'Folder deleted correctly',
            'description' => 'Folder deleted correctly'
        ], 201); 
    }
}
