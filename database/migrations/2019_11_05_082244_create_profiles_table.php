<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->unique();
            $table->string('image')->nullable();
            $table->string('firt_name', 100)->nullable();
            $table->string('last_name', 100)->nullable();
            $table->string('address', 70)->nullable();
            $table->string('city', 70)->nullable();
            $table->string('country', 70)->nullable();
            $table->string('zip', 70)->nullable();
            $table->string('phone', 10)->nullable();
            $table->timestamps();

            $table->foreign('id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
