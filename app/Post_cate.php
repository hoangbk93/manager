<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post_cate extends Model
{
	protected $table = 'post_cate';
    protected $fillable = ['id_post', 'id_cate', 'status'];
}
