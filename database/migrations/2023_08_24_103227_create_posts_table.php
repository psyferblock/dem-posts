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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            // $table->integer('user_id')->unsigned()->index(); //unsigned because we want it to be positive and index is for indexing sepeed of recovery of data
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // laravel would reference the user table before the under score constrained() means that there is aforeign key constrained to this 
            $table->text('body');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
