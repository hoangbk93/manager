<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_tag extends Model
{
	protected $table = 'product_tag';
    protected $fillable = ['id_product', 'id_tag', 'status'];
}
