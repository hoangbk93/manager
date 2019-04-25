<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
	protected $table = 'home';
    protected $fillable = ['name','des','data','details','component','link','type','order','status'];
}
