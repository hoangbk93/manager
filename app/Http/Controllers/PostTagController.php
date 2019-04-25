<?php

namespace App\Http\Controllers;

use App\Post_tag;
use Illuminate\Http\Request;

class PostTagController extends Controller
{
     public function index()
    {
        return Post_tag::all();
    }
 
    public function show($id)
    {
        return Post_tag::find($id);
    }

    public function store(Request $request)
    {
        return Post_tag::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $Post_tag = Post_tag::findOrFail($id);
        $Post_tag->update($request->all());

        return $Post_tag;
    }

    public function delete(Request $request, $id)
    {
        $Post_tag = Post_tag::findOrFail($id);
        $Post_tag->delete();

        return 204;
    }
}
