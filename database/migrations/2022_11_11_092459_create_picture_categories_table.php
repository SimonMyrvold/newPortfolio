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
        Schema::create('picture_categories', function (Blueprint $table) {
            $table->integer('element_id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('picture_id');
            $table->timestamps();
            
            $table->foreign('category_id')->references('id')->on('abouts')->onDelete('cascade');
            $table->foreign('picture_id')->references('id')->on('pictures')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('picture_categories');
    }
};
