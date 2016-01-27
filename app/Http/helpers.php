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

function folder_url($user, $folder){
  return '/dashboard/'.$user->slug.'/'.$user->id.'/folders/'.$folder->slug.'/'.$folder->id;
}

function current_folder_path($folder){
  $path = '';

  while($folder->parent_folder_id != 0){
    $path = $folder->slug.'/'.$path;
    $folder = Folder::find($folder->parent_folder_id);
  }

  $path = '@root/'.$path;

  return $path;
}

function current_folder_breadcrumb_path($user, $folder){
  $path = '<li class="active"><a href="'.url(folder_url($user, $folder)).'"><span class="fa fa-folder-open-o"></span> '.$folder->name.'</a></li>';
  
  $folder = Folder::find($folder->parent_folder_id);

  while($folder->parent_folder_id != 0){ 
    $path = '<li><a href="'.url(folder_url($user, $folder)).'"><span class="fa fa-folder"></span> '.$folder->name.'</a></li>'.$path;
    $folder = Folder::find($folder->parent_folder_id);
  }
  
  $path = '<li><a href="'.url('/dashboard/'.$user->slug.'/'.$user->id).'"><span class="fa fa-home"></span> Inicio</a></li>'.$path;

  return $path;
}