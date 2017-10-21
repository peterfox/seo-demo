<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Page
 * @package App
 * @property string slug
 * @property Browseable browseable
 */
class Page extends Model
{
    protected $fillable = [
        'slug'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function browseable()
    {
        return $this->morphTo();
    }
}
