<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostjobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postjobs', function (Blueprint $table) {
            $table->id();
            $table->string('job_title');
            $table->string('job_type');
            
            $table->string('city');
            $table->string('state');
            $table->enum('is_active',['active','inactive'])->default('active');
            $table->string('job_description');
            $table->string('skill_required');
            $table->string('image')->nullable();
            $table->string('salary')->nullable();
            
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->bigInteger('company_id')->unsigned()->nullable();
    
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('postjobs');
    }
}