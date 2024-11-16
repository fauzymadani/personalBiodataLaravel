<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create("portfolio", function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("school");
            $table->string("major");
            $table->string("os");
            $table->string("wm");
            $table->string("favourite_text_editor");
            $table->string("favourite_text_editor2");
            $table->string("favourite_terminal_text_editor");
            $table->string("favourite_terminal_text_editor2");
            $table->string("favourite_text_editor3");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("portfolio");
    }
};
