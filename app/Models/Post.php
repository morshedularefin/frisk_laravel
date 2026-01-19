<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function post_category()
    {
        return $this->belongsTo(PostCategory::class);
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
