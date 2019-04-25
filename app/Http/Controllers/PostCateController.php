<?php

namespace App\Http\Controllers;

use App\Post_cate;
use Illuminate\Http\Request;

class PostCateController extends Controller
{
     public function index()
    {
        return Post_cate::all();
    }
 
    public function show($id)
    {
        return Post_cate::find($id);
    }

    public function store(Request $request)
    {
        return Post_cate::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $Post_cate = Post_cate::findOrFail($id);
        $Post_cate->update($request->all());

        return $Post_cate;
    }

    public function delete(Request $request, $id)
    {
        $Post_cate = Post_cate::findOrFail($id);
        $Post_cate->delete();

        return 204;
    }
}
