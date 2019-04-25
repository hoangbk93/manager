<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title',255);
            $table->string('des',255);
            $table->string('url',255);
            $table->longText('content');
            $table->string('image',255);
            $table->string('author');
            $table->integer('status_seo')->nullable()->default(0);
            $table->tinyInteger('status')->nullable()->default(1);
            $table->timestamps();
        });
        Schema::create('pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title',255);
            $table->string('des',255);
            $table->string('url',255);
            $table->longText('content');
            $table->string('image',255);
            $table->string('author');
            $table->integer('status_seo')->nullable()->default(0);
            $table->tinyInteger('status')->nullable()->default(1);
            $table->timestamps();
        });
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title',255);
            $table->string('url',255);
            $table->string('des',255);
            $table->longText('content');
            $table->string('image',255);
            $table->string('price_pre',255);
            $table->string('price',255);
            $table->string('deal',255);
            $table->string('author');
            $table->integer('status_seo')->nullable()->default(0);
            $table->tinyInteger('status')->nullable()->default(1);
            $table->timestamps();
        });
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',255);
            $table->string('title',255);
            $table->string('url',255);
            $table->string('des',255);
            $table->string('author');
            $table->integer('status_seo')->nullable()->default(0);
            $table->tinyInteger('status')->nullable()->default(1);
            $table->timestamps();
        });
        Schema::create('tags', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',255);
            $table->string('title',255);
            $table->string('url',255);
            $table->string('author');
            $table->string('des',255);
            $table->integer('status_seo')->nullable()->default(0);
            $table->tinyInteger('status')->nullable()->default(1);
            $table->timestamps();
        });
        Schema::create('post_tag', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_post');
            $table->integer('id_tag');
            $table->tinyInteger('status')->nullable()->default(1);
            $table->timestamps();
        });
        Schema::create('post_cate', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_post');
            $table->integer('id_cate');
            $table->tinyInteger('status')->nullable()->default(1);
            $table->timestamps();
        });
        Schema::create('product_tag', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_product');
            $table->integer('id_tag');
            $table->tinyInteger('status')->nullable()->default(1);
            $table->timestamps();
        });
        Schema::create('product_cate', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_product');
            $table->integer('id_cate');
            $table->tinyInteger('status')->nullable()->default(1);
            $table->timestamps();
        });
        Schema::create('menus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',255)->unique();
            $table->tinyInteger('status')->nullable()->default(1);
            $table->timestamps();
        });
        Schema::create('menu_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('menu_id')->nullable();
            $table->string('title');
            $table->string('url');
            $table->string('target')->default('_self');
            $table->string('icon_class')->nullable();
            $table->string('color')->nullable();
            $table->integer('parent_id')->nullable();
            $table->integer('order');
            $table->tinyInteger('status')->nullable()->default(1);
            $table->timestamps();
        });
        Schema::create('home', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',255)->unique();
            $table->string('des',255);
            $table->text('data');
            $table->text('details')->nullable()->default(null);
            $table->string('component')->nullable();
            $table->string('link')->nullable();
            $table->string('type')->nullable();
            $table->integer('order')->default('1');
            $table->tinyInteger('status')->nullable()->default(1);
            $table->timestamps();
        });
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',255);
            $table->string('email',255);
            $table->text('content');
            $table->integer('id_object');
            $table->string('type_object',255);
            $table->tinyInteger('status')->nullable()->default(0);
            $table->timestamps();
        });
        Schema::create('configs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('key')->unique();
            $table->string('display_name');
            $table->text('value');
            $table->text('details')->nullable()->default(null);
            $table->string('type');
            $table->integer('order')->default('1');
            $table->tinyInteger('status')->nullable()->default(1);
            $table->timestamps();
        });
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',255);
            $table->string('email',255);
            $table->string('phone',255);
            $table->string('address',255);
            $table->string('department',255);
            $table->string('note',255);
            $table->string('image',255);
            $table->string('birthday',255);
            $table->tinyInteger('status')->nullable()->default(1);
            $table->timestamps();
        });
        Schema::create('seo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title',255);
            $table->string('des',255);
            $table->string('image',255);
            $table->string('metakeyword',255);
            $table->string('id_object',255);
            $table->string('type_object',255);
            $table->tinyInteger('status')->nullable()->default(1);
            $table->timestamps();
        });
// lien ket bang 1 - nhieu menu - menu item
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
        Schema::dropIfExists('products');
        Schema::dropIfExists('pages');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('post_cate');
        Schema::dropIfExists('post_tag');
        Schema::dropIfExists('product_cate');
        Schema::dropIfExists('product_tag');
        Schema::dropIfExists('tags');
        Schema::dropIfExists('menu_item');
        Schema::dropIfExists('menus');
        Schema::dropIfExists('home');
        Schema::dropIfExists('comments');
        Schema::dropIfExists('configs');
        Schema::dropIfExists('contacts');
        Schema::dropIfExists('seo');
    }
}
