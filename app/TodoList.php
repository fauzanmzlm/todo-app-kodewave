<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TodoList extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'body', 'is_complete', 'user_id',
    ];
}