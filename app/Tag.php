<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
	protected $table = 'tags';
    protected $fillable = ['title', 'des', 'url', 'content', 'image','author', 'status_seo', 'status'];
}
