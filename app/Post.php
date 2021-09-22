<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function postCategory() {
        return $this->belongsTo(PostCategory::class, 'post_categories_id');
    }
}
