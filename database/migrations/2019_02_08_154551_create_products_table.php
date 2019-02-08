<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->unsigned();
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->string('image')->default('default.png');
            $table->string('multiple_image')->default('default.png');
            $table->float('present_price');
            $table->float('previous_price');
            $table->string('featured_image')->default('default.png');
            $table->text('description');
            $table->boolean('stock')->default(false);
            $table->boolean('compare')->default(false);

            $table->foreign('category_id')
                    ->references('id')->on('categories')
                    ->onDelete('cascade');
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
    }
}
