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
        Schema::create('dress_outfit', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('dress_id');
            $table->unsignedBigInteger('outfit_id');
            $table->timestamps();

            $table->foreign('dress_id')->references('id')->on('dresses')->onDelete('cascade');
            $table->foreign('outfit_id')->references('id')->on('outfits')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dress_outfit');
    }
};
