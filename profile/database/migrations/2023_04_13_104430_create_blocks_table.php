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
        Schema::create('blocks', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->longText('images');
            $table->longText('settings');
            $table->longText('details');
            $table->string('type');
            $table->unsignedBigInteger('landingpage_id')->nullable();
            $table->foreign('landingpage_id')->references('id')->on('landingpages')->onDelete('CASCADE');
            $table->timestamps();
        //titre images settings details type
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blocks');
    }
};
