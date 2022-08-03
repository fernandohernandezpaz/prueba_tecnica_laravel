<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up():void
    {
        Schema::create('routes', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->string('external_id')->nullable();
            $table->string('invitation_code',20);
            $table->string('title');
            $table->dateTime('start_timestamp');
            $table->dateTime('end_timestamp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down():void
    {
        Schema::dropIfExists('routes');
    }
}
