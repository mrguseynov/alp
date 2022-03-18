<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->text('description');
            $table->string('img');
            $table->integer('parent_id')->nullable();
            $table->string('slug')->unique();
            $table->timestamps();
        });
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();// Unique title
            $table->string('img'); //Product title
            $table->text('text');//Product short text
            $table->text('description'); //Product
            $table->string('slug')->unique();
            $table->boolean('active');
            $table->boolean('vip');
            $table->date('vip_ends');
            $table->bigInteger('cat_id')->unsigned()->nullable();
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('cat_id')->references('id')->on('categories')->onDelete('cascade');
            $table->timestamps();
        });
        Schema::create('product_translations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('product_id')->unsigned();
            $table->string('locale')->index();

            $table->string('title')->unique();
            $table->text('text');
            $table->text('description');

            $table->unique(['product_id','locale']);
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->timestamps();
        });
        Schema::create('category_translations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('category_id')->unsigned();
            $table->string('locale')->index();


            $table->string('title')->unique();
            $table->text('text');

            $table->unique(['category_id','locale'])->nullable();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
        Schema::dropIfExists('article_translations');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('category_translations');
    }
};
