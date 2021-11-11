<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Model;

class Post extends Model
{
    use HasSlug;

    protected $fillable = [
        'title',
        'content',
    ];

    public $slugAttributes = [
        'title',
    ];

    public function pages(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany('App\Models\Page');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }
}
