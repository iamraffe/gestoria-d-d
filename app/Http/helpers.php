<?php

use App\Folder;

function flash($title = null, $message = null)
{
    $flash = app('App\Http\Flash');
    if(func_num_args() == 0){
        return $flash;
    }
    return $flash->info($message);
}

function file_url($user, $file){
  return '/dashboard/'.$user->slug.'/'.$user->id.'/files/'.$file->slug.'/'.$file->id;
}

function current_folder_path($folder){
  $path = '@root';
  
  while($folder->parent_folder_id != 0){
    $path = $path.'/'.$folder->slug;
    $folder = Folder::find($folder->parent_folder_id);
  }
  
  return $path;
}