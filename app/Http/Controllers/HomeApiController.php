<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Home;

class HomeApiController extends Controller
{
     public function index()
    {
        return Home::all();
    }
 
    public function show($id)
    {
        return Home::find($id);
    }

    public function store(Request $request)
    {
        return Home::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $home = Home::findOrFail($id);
        $home->update($request->all());

        return $home;
    }

    public function delete(Request $request, $id)
    {
        $home = Home::findOrFail($id);
        $home->delete();

        return 204;
    }
}
