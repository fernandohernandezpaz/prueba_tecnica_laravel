<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->unsignedBigInteger('user_plan_id');
            $table->unsignedBigInteger('route_id');
            $table->unsignedBigInteger('track_id')->nullable();
            $table->date('reservation_start');
            $table->date('reservation_end');
            $table->unsignedBigInteger('route_stop_origin_id');
            $table->unsignedBigInteger('route_stop_destination_id');

            $table->timestamps();
            $table->softDeletes();
            $table->foreign('user_plan_id')
                ->references('id')
                ->on('user_plans')
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
        Schema::dropIfExists('reservations');
    }
}
