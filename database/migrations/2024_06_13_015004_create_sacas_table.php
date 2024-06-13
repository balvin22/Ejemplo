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
        Schema::create('sacas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('people_id');
            $table->unsignedBigInteger('copy_id');
            $table->foreign('people_id')->references('id')->on('peoples')->onDelete('cascade');
            $table->foreign('copy_id')->references('id')->on('copies')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sacas');
    }
};
