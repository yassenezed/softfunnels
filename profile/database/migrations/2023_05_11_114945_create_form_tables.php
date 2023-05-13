<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormTables extends Migration
{
    public function up()
    {
        // Create form_configs table
        

        // Create normal_form table
        Schema::create('normal_form', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('landing_page_id');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('company')->nullable();
            $table->string('subject')->nullable();
            $table->text('message')->nullable();
            $table->timestamps();

            $table->foreign('landing_page_id')
                  ->references('id')
                  ->on('landingpages')
                  ->onDelete('cascade');
        });
        Schema::create('form_configs', function (Blueprint $table) {
            $table->id();
            $table->json('first_name_option');
            $table->json('last_name_option');
            $table->json('email_option');
            $table->json('phone_option');
            $table->json('company_option');
            $table->json('subject_option');
            $table->json('message_option');
            $table->unsignedBigInteger('normal_form_id')->nullable();
            $table->timestamps();

            $table->foreign('normal_form_id')
                  ->references('id')
                  ->on('normal_form')
                  ->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('form_configs');
        Schema::dropIfExists('normal_form');
    }
}
?>