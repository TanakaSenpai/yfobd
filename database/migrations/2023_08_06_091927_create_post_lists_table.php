<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('post_lists', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('page_id');
            $table->string('post_url');
            $table->string('post_title');
            $table->string('post_category');
            $table->string('post_short_description');
            $table->string('post_details');
            $table->string('post_image_one');
            $table->string('post_image_two');
            $table->string('status');
            $table->foreign('page_id')->references('id')->on('site');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_lists');
    }
};
