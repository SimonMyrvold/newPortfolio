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
        Schema::create('about_mes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('profile_picture');
            $table->text('about_me_description');
            $table->unsignedBigInteger('contacts');
            $table->unsignedBigInteger('certificates');

            $table->foreign('profile_picture')->references('category_id')->on('picture_category')->onDelete('cascade');
            $table->foreign('contacts')->references('id')->on('contacts')->onDelete('cascade');
            $table->foreign('certificates')->references('id')->on('certificates')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('about_mes');
    }
};
