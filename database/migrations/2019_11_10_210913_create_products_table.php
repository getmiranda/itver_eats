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
            $table->bigIncrements('id');
            $table->unsignedBigInteger('category_id')->index();
            $table->unsignedBigInteger('user_id')->index()->nullable();
            $table->string('name', 100);
            $table->text('description', 300)->nullable();
            $table->string('details', 600)->nullable();
            $table->double('price', 8, 2);
            $table->string('image');
            $table->string('other_category')->nullable();
            $table->boolean('availability');//Para el vendedor
            $table->boolean('check');//Para el administrador

            //Seccion para la v1
            $table->string('vendedor', 50);
            $table->string('phone', 10);
            $table->string('email',70);

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

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
