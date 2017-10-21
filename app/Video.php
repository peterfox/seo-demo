<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model implements Browseable
{
    protected $fillable = [
        'title',
        'file',
        'description',
    ];

    public function page()
    {
        return $this->morphOne(Page::class, 'browseable');
    }

    public function getAction()
    {
        return 'App\Http\Controllers\VideoController@showVideo';
    }

    public function getParameterName()
    {
        return 'video';
    }
}
