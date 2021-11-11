<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Model;

class Post extends Model
{
    use HasSlug;

    protected $fillable = [
        'published',
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

}
