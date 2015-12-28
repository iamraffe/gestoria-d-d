<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'files';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'path'];

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
        return $this->belongsTo('App\Folder');
    }
}
