<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_cate extends Model
{
	protected $table = 'product_cate';
    protected $fillable = ['id_product', 'id_cate', 'status'];
}
