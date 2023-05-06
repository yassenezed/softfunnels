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
        
        Schema::create('landingpages', function (Blueprint $table) {
            $table->id();
            $table->text('titre');
            $table->text('description');
            $table->string('state');
            $table->string('slug');
            $table->string('visitors');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');




        //     $table->id();
        //     $table->text('titre');
        //     $table->text('description');
        //     $table->string('image'); //default('default_image.png'); need to have default values
        //     $table->json('details');
        //     $table->json('settings');
        //     $table->json('info1');
        //     $table->string('type');
        //     $table->json('info2');
        //     $table->timestamps(); // Add timestamps() to create the created_at and updated_at columns.
        //     //     'titre',
        // // 'images',
        // // 'details',
        // // 'settings',
        // // 'type',
        // // 'info1',
        // // 'info2',
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('landingpages');
    }
};
