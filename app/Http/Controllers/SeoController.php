<?php

namespace App\Http\Controllers;

use App\Seo;
use Illuminate\Http\Request;

class SeoController extends Controller
{
    public function index()
    {
        return Seo::all();
    }
 
    public function show($id)
    {
        return Seo::find($id);
    }

    public function store(Request $request)
    {
        return Seo::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $seo = Seo::findOrFail($id);
        $seo->update($request->all());

        return $seo;
    }

    public function delete(Request $request, $id)
    {
        $seo = Seo::findOrFail($id);
        $seo->delete();

        return 204;
    }
}
