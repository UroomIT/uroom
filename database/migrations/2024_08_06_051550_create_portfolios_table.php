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
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('room_id')->index();
            $table->foreign('room_id')->references('id')->on('rooms')->onDelete('cascade')->onUpdate('cascade');
            $table->string('Photo1')->nullable();
            $table->string('title1')->nullable();
            $table->string('Photo2')->nullable();
            $table->string('title2')->nullable();
            $table->string('Photo3')->nullable();
            $table->string('title3')->nullable();
            $table->string('Photo4')->nullable();
            $table->string('title4')->nullable();
            $table->string('Photo5')->nullable();
            $table->string('title5')->nullable();
            $table->string('Photo6')->nullable();
            $table->string('title6')->nullable();
            $table->string('Photo7')->nullable();
            $table->string('title7')->nullable();
            $table->string('Photo8')->nullable();
            $table->string('title8')->nullable();
            $table->string('Photo9')->nullable();
            $table->string('title9')->nullable();
            $table->string('Photo10')->nullable();
            $table->string('title10')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolios');
    }
};
