<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $table = 'posts';
    protected $fillable = ['title', 'des', 'url', 'content', 'image','author', 'status_seo', 'status'];
}
