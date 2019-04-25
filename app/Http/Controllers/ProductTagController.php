<?php

namespace App\Http\Controllers;

use App\Product_tag;
use Illuminate\Http\Request;

class ProductTagController extends Controller
{
     public function index()
    {
        return Product_tag::all();
    }
 
    public function show($id)
    {
        return Product_tag::find($id);
    }

    public function store(Request $request)
    {
        return Product_tag::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $product_tag = Product_tag::findOrFail($id);
        $product_tag->update($request->all());

        return $product_tag;
    }

    public function delete(Request $request, $id)
    {
        $product_tag = Product_tag::findOrFail($id);
        $product_tag->delete();

        return 204;
    }
}
