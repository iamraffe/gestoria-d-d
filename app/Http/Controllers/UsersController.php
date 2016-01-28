<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;
use App\Folder;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /*
     * Instantiate a new UserController instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->middleware('admin', ['except' => ['show', 'update']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $user = \Auth::user();
        return view('users.index', compact('users'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug, $id)
    {
        $user = User::find($id);
        $current_folder = $user->folders()->first();
        $child_folders = $current_folder->folders()->get();
        $this->authorize('show-user', $user);
        return view('users.show', compact('user', 'current_folder', 'child_folders'));
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
    public function update(Request $request, $slug, $id)
    {
        $user = User::find($id);

        $this->authorize('show-user', $user);

        if($request->password && $request->password_confirmation){
            $this->validate($request, [
                    'password' => 'required|confirmed',
            ]);

            $credentials = $request->only(
                    'name', 'email', 'password', 'password_confirmation'
            );

            $user->password = bcrypt($credentials['password']);
        }

        $old_path = 'documents/'.$user->slug;

        $user->name = $request->name;

        $user->slug = '@'.str_slug($request->name);

        // $user->email = $request->email;

        $user->save();

        $folders = $user->folders()->get();

        $folders->each(function ($folder, $key) use ($user){
            if($folder->parent_folder_id > 0){
                $new_path = 'documents/'.$user->slug.'/'.current_folder_path(Folder::find($folder->parent_folder_id)).$folder->slug;
                $folder->files()->get()->each(function($file, $key) use ($new_path){
                    $file->path = $new_path.'/'.$file->name_on_disk;
                    $file->save();
                });
            }
        });

        \File::move(public_path($old_path), public_path('documents/'.$user->slug));

        return redirect('/dashboard/users/'.$user->slug.'/'.$user->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug, $id)
    {
        $user = User::findOrFail($id);

        try {
            \File::deleteDirectory(public_path('documents/'.$user->slug));
            $user->delete();
        }catch(\Exception $e){
            return response()->json([
                'message' => 'User was not deleted',
                'description' => $e->getMessage()
            ], 403);
        }
        return redirect('/dashboard/users/'.$user->slug.'/'.$user->id);
        // return response()->json([
        //     'message' => 'User deleted correctly',
        //     'description' => 'User deleted correctly'
        // ], 201);
    }

    public function password_reset(Request $request)
    {
            $this->validate($request, [
                    'password' => 'required|confirmed',
            ]);
            $credentials = $request->only(
                    'password', 'password_confirmation'
            );
            $user = \Auth::user();
            $user->password = bcrypt($credentials['password']);
            $user->save();
            return redirect('/dashboard/users/');
    }
}
