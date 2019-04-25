<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Config;

class ConfigController extends Controller
{
    public function index()
    {
        return Config::all();
    }
 
    public function show($id)
    {
        return Config::find($id);
    }

    public function store(Request $request)
    {
        return Config::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $config = Config::findOrFail($id);
        $config->update($request->all());

        return $config;
    }

    public function delete(Request $request, $id)
    {
        $config = Config::findOrFail($id);
        $config->delete();

        return 204;
    }
}
