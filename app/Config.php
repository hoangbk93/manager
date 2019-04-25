<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
	protected $table = 'configs';
    protected $fillable = ['key', 'display_name', 'value', 'details', 'type','order', 'status'];
}
