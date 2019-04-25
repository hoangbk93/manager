<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['prefix' => '/v1', 'namespace' => 'Api\V1', 'as' => 'api.'], function () {
    Route::resource('companies', 'CompaniesController', ['except' => ['create', 'edit']]);
});
Route::group(['prefix' => 'admin'],function(){
	$list_route = [ 
			"post" => "PostController", 
			"page" => "PageController",
			"product" => "ProductController",
			"category" => "CategoryController",
			"tag" => "TagController",
			"post-tag" => "PostTagController",
			"post-cate" => "PostCateController",
			"product-tag" => "ProductTagController",
			"product-cate" => "ProfuctCateController",
			"menu" => "MenuController",
			"menu-item" => "MenuItemController",
			"home" => "HomeApiController",
			"comment" => "CommentController",
			"config" => "ConfigController",
			"contact" => "ContactController",
			"seo" => "SeoController",
		];
	foreach ($list_route as $name => $controller) {
		Route::get($name, $controller.'@index')->name($name.'index');
		Route::get($name.'/{id}', $controller.'@show')->name($name.'show');
		Route::post($name, $controller.'@store')->name($name.'store');
		Route::put($name.'/{id}', $controller.'@update')->name($name.'update');
		Route::delete($name.'/{id}', $controller.'@delete')->name($name.'delete');
	};
});