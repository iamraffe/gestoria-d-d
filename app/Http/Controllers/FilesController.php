<?php

namespace App\Http\Controllers;

use App\File;
use App\Folder;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class FilesController extends Controller
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
        $file = $request->file('file');

        $folder  = Folder::findOrFail($request->current_folder);

        $file_original_name = str_slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME));

        $extension = $file->getClientOriginalExtension();

        $file_path = 'documents/'.$request->user()->slug.'/'.$folder->slug;

        $file_name_on_disk = $file_original_name.str_random(20).'.'.$extension;

        $file_name = $file_original_name.'.'.$extension;

        $file_slug = '@'.$file_name;

        $complete_path = $file_path.'/'.$file_name_on_disk;

        if (\File::exists($complete_path))
        {
           abort(403, "A file with this name already exists within this folder.");
        }

        $file->move($file_path, $file_name_on_disk); 

        try {
            $request->user()->files()->create([
                'folder_id' => $folder->id,
                'path' => $complete_path,
                'name' => $file_name,
                'slug' => $file_slug
            ]);
        }catch(\Exception $e){
            return response()->json([
                'message' => 'File was not created',
                'description' => $e->getMessage()
            ], 403);
        }

        return response()->json([
            'message' => 'File created correctly',
            'description' => 'A file was uploaded and stored correctly at '.$complete_path
        ], 201); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($user_slug, $user_id, $file_slug, $file_id)
    {
        $file = File::findOrFail($file_id);

        // $filename = 'test.pdf';

        // $path = storage_path().DIRECTORY_SEPARATOR.$filename;

        return Response::make(file_get_contents($file->path), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; '.$file->name,
        ]);
        // $file = File::findOrFail($file_id);

        // // if(Gate::denies('show-file', $file)){
        // //     abort(403, "Sorry, not sorry");
        // // }

        // return $file->name;
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $file = File::find($id);   
        try {
            \File::delete(public_path($file->path));
            $file->delete();
        }catch(\Exception $e){
            return response()->json([
                'message' => 'File was not deleted',
                'description' => $e->getMessage()
            ], 403);
        }
        return response()->json([
            'message' => 'File deleted correctly',
            'description' => 'File deleted correctly'
        ], 201); 
    }
}
