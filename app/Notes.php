<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'content', 'title',
    ];

    public static $rules = [
        'content' => 'required',
        'title' => 'required',        
    ];

    public $timestamps = false;

}
