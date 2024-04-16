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
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->string('sessions_id');
            $table->unsignedBigInteger('chatroom_id');
            $table->mediumText('messages_text')->nullable();
            $table->mediumText('messages_sound')->nullable();
            $table->mediumText('messages_images')->nullable();
            $table->mediumText('messages_doc')->nullable();
            $table->timestamps();
            $table->foreign('sessions_id')->references('id')->on('sessions')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('chatroom_id')->references('id')->on('chat_room')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
