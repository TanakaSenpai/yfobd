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
        Schema::create('members_list', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('fathers_name', 100);
            $table->string('mothers_name', 100);
            $table->string('address', 100);
            $table->string('qualification');
            $table->string('medical_course');
            $table->integer('phone_number')->limit(15);
            $table->string('email', 40);
            $table->string('subject')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members_list');
    }
};
