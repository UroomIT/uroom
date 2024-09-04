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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('RoomNumber')->unique();
            $table->string('Title');
            $table->string('gender');
            $table->unsignedBigInteger('type_room_id')->index();
            $table->foreign('type_room_id')->references('id')->on('type_rooms')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('university_id')->index();
            $table->foreign('university_id')->references('id')->on('universities')->onDelete('cascade')->onUpdate('cascade');
            $table->string('logo_university')->nullable();
            $table->string('Address');
            $table->string('Price');
            $table->string('Photo')->nullable();
            $table->text('Description')->nullable();
            $table->string('Rate')->default(1);
            $table->boolean('IsAvailable')->default(0);
            $table->boolean('IsOnline')->default(0);
            $table->string('univ_around_available')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
