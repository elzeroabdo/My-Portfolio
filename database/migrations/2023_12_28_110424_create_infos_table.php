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
        Schema::create('infos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('twitter')->nullable();
            $table->string('github')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('facebook')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->text('about')->nullable();
            $table->text('resume')->nullable();
            $table->text('cv')->nullable();
            $table->text('avatar')->nullable();
            $table->text('jop')->nullable();
            $table->text('address')->nullable();
            $table->text('website')->nullable();
            $table->text('age')->nullable();
            $table->text('degree')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('infos');
    }
};
