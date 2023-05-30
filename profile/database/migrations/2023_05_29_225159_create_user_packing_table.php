<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserPackingTable extends Migration
{
    public function up()
    {
        Schema::create('user_packing', function (Blueprint $table) {
            $table->id();
            $table->boolean('active')->default(true);
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('pack_id');
            $table->date('start_date');
            $table->date('end_date');
            $table->timestamps();
            
            // Define foreign key constraints
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('pack_id')->references('id')->on('packs');
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_packing');
    }
}
