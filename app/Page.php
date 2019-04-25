<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
	protected $table = 'pages';
    protected $fillable = ['title', 'des', 'url', 'content', 'image','author', 'status_seo', 'status'];
}
