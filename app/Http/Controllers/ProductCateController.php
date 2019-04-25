<?php

namespace App\Http\Controllers;

use App\Product_cate;
use Illuminate\Http\Request;

class ProductCateController extends Controller
{
     public function index()
    {
        return Product_cate::all();
    }
 
    public function show($id)
    {
        return Product_cate::find($id);
    }

    public function store(Request $request)
    {
        return Product_cate::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $Product_cate = Product_cate::findOrFail($id);
        $Product_cate->update($request->all());

        return $Product_cate;
    }

    public function delete(Request $request, $id)
    {
        $Product_cate = Product_cate::findOrFail($id);
        $Product_cate->delete();

        return 204;
    }
}
