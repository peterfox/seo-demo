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
        'title',
        'content',
    ];

    public function page()
    {
        return $this->morphOne(Page::class, 'browseable');
    }

    public function getAction()
    {
        return 'App\Http\Controllers\PostController@showPost';
    }

    public function getParameterName()
    {
        return 'post';
    }
}
