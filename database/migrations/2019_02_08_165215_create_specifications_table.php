<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpecificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specifications', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id')->unsigned();
            $table->string('Color')->nullable();
            $table->string('Network')->nullable();
            $table->string('Dimensions')->nullable();
            $table->string('Weight')->nullable();
            $table->string('Build')->nullable();
            $table->string('Sim')->nullable();
            $table->string('Display')->nullable();
            $table->string('Size')->nullable();
            $table->string('Resolution')->nullable();
            $table->string('Multitouch')->nullable();
            $table->string('Platform')->nullable();
            $table->string('Chipset')->nullable();
            $table->string('CPU')->nullable();
            $table->string('GPU')->nullable();
            $table->string('Memory')->nullable();
            $table->string('Internal')->nullable();
            $table->string('Main Camera')->nullable();

            $table->foreign('product_id')
                    ->references('id')->on('products')
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
        Schema::dropIfExists('specifications');
    }
}
