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
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('businessname')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('country')->nullable();
            $table->string('address')->nullable();
            $table->string('state')->nullable();
            $table->string('postalCode')->nullable();
            $table->string('phone')->nullable();
            $table->string('usertype')->nullable();
            $table->string('role')->nullable();
            $table->string('isadmin')->nullable();
            $table->boolean('is_email_verified')->default(0);
            $table->boolean('is_active')->default(1);
            $table->string('login_medium')->nullable();
            $table->string('social_id')->nullable();
             $table->boolean('is_phone_verified')->default(0);
            $table->string('temporary_token')->nullable();
            $table->rememberToken();
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