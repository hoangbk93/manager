<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
     public function index()
    {
        return Page::all();
    }
 
    public function show($id)
    {
        return Page::find($id);
    }

    public function store(Request $request)
    {
        return Page::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $page = Page::findOrFail($id);
        $page->update($request->all());

        return $page;
    }

    public function delete(Request $request, $id)
    {
        $page = Page::findOrFail($id);
        $page->delete();

        return 204;
    }
}
