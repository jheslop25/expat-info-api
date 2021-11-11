<?php

namespace App\Models;


use A17\Twill\Models\Model;

class Page extends Model
{
    protected $fillable = [
        'name',
        'path',
        'published'
    ];

    public function posts(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany('App\Models\Post');
    }
}
