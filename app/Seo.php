<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
	protected $table = 'seo';
    protected $fillable = ['title', 'des', 'image', 'metakeyword', 'id_object','type_object', 'status'];
}
