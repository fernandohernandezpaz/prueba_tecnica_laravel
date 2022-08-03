<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRouteDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up():void
    {
        Schema::create('route_data', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->unsignedBigInteger('route_id');
            $table->unsignedBigInteger('calendar_id');
            $table->string('vinculation_route')->nullable();
            $table->smallInteger('route_circular');
            $table->date('date_init');
            $table->date('date_finish');
            $table->smallInteger('mon');
            $table->smallInteger('tue');
            $table->smallInteger('wed');
            $table->smallInteger('thu');
            $table->smallInteger('fri');
            $table->smallInteger('sat');
            $table->smallInteger('sun');
            $table->timestamps();

            $table->foreign('route_id')
                ->references('id')
                ->on('routes')
                ->onDelete('cascade');

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
    public function down():void
    {
        Schema::dropIfExists('route_data');
    }
}
