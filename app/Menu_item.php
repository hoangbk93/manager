<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu_item extends Model
{
	protected $table = 'menu_items';
    protected $fillable = ['menu_id','title','url','target','icon_class','color','parent_id','order','status'];
}
