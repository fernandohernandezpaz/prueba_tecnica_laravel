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
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->string('password')->nullable();
            $table->string('email')->unique();
            $table->rememberToken();
            $table->dateTime('last_online')->nullable();
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('picture')->nullable();
            $table->string('verification_code')->nullable();
            $table->string('new_email')->nullable();
            $table->integer('status');
            $table->integer('first');
            $table->date('last_accept_date')->nullable();
            $table->string('company_contact')->nullable();
            $table->decimal('credits', 10, 2)->nullable();
            $table->integer('first_trip');
            $table->smallInteger('phone_verify');
            $table->integer('incomplete_profile');
            $table->bigInteger('language_id')->nullable();
            $table->string('token_auto_login')->nullable();
            $table->dateTime('email_verified_at')->nullable();
            $table->string('user_vertical')->nullable();
            $table->integer('no_registered');
            $table->timestamp('created')->nullable();
            $table->timestamp('modified')->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
}
