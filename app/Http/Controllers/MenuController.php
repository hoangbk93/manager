<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;

class MenuController extends Controller
{
     public function index()
    {
        return Menu::all();
    }
 
    public function show($id)
    {
        return Menu::find($id);
    }

    public function store(Request $request)
    {
        return Menu::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $menu = Menu::findOrFail($id);
        $menu->update($request->all());

        return $menu;
    }

    public function delete(Request $request, $id)
    {
        $menu = Menu::findOrFail($id);
        $menu->delete();

        return 204;
    }
}
