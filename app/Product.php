<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $table = 'products';
    protected $fillable = ['title', 'des', 'url', 'content', 'image','price_pre','price','deal', 'author', 'status_seo', 'status'];
}
