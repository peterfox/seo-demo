<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string slug
 * @property string title
 * @property string content
 */
class Post extends Model
{
    protected $fillable = [
        'slug',
        'title',
        'content',
    ];
}
