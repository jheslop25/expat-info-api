<?php

namespace App\Models;


use A17\Twill\Models\Model;

class Comment extends Model
{
    protected $fillable = [
        'body',
        'post_id'
    ];

    public function post(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Post::class);
    }
}
