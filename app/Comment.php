<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	protected $table = 'comments';
    protected $fillable = ['name','email','content','id_object','type_object','status'];
}
