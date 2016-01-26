<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'folders';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'slug', 'user_id', 'parent_folder_id'];

    /**
     * Get the folders that belong to the folder.
     */
    public function folders()
    {
        return $this->hasMany('App\Folder', 'parent_folder_id');
    }

    /**
     * Get the files that belong to the folder.
     */
    public function files()
    {
        return $this->hasMany('App\File');
    }

    /**
     * Get the user that owns the folder.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get the folder that owns the folder.
     */
    public function folder()
    {
        return $this->belongsTo('App\Folder', 'parent_folder_id');
    }
}
