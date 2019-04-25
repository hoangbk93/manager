<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post_tag extends Model
{
	protected $table = 'post_tag';
    protected $fillable = ['id_post', 'id_tag', 'status'];
}
