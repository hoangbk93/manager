<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu_item;

class MenuItemController extends Controller
{
     public function index()
    {
        return Menu_item::all();
    }
 
    public function show($id)
    {
        return Menu_item::find($id);
    }

    public function store(Request $request)
    {
        return Menu_item::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $menu_item = Menu_item::findOrFail($id);
        $menu_item->update($request->all());

        return $menu_item;
    }

    public function delete(Request $request, $id)
    {
        $menu_item = Menu_item::findOrFail($id);
        $menu_item->delete();

        return 204;
    }
}
