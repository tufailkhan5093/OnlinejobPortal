<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->enum('user_type',['jobseeker','recruiter','admin'])->default('jobseeker');
            $table->date('dob')->nullable();
            $table->enum('is_active',['active','inactive'])->default('active');
            $table->string('contact');
            
           
           
            // $table->date('dob');
            // $table->enum('gender',['male','female']);
            // $table->string('is_active')->default('active');
            // $table->string('contact');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
           
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}