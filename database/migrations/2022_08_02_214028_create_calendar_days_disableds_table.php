<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalendarDaysDisabledsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up():void
    {
        Schema::create('calendar_days_disableds', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->unsignedBigInteger('calendar_id');
            $table->dateTime('day');
            $table->boolean('enabled');
            $table->timestamps();
            $table->foreign('calendar_id')
                ->references('id')
                ->on('calendars')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('calendar_days_disableds');
    }
}
