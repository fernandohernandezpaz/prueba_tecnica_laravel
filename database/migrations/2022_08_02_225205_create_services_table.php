<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->string('external_id')->nullable();
            $table->string('external_budget_id')->nullable();
            $table->string('external_route_id')->nullable();
            $table->unsignedBigInteger('track_id')->nullable();
            $table->string('name')->nullable();
            $table->text('notes')->nullable();
            $table->dateTime('timestamp')->nullable();
            $table->text('arrival_address')->nullable();
            $table->dateTime('arrival_timestamp')->nullable();
            $table->string('departure_address')->nullable();
            $table->dateTime('departure_timestamp')->nullable();
            $table->integer('capacity');
            $table->integer('confirmed_pax_count');
            $table->dateTime('reported_departure_timestamp')->nullable();
            $table->string('reported_departure_kms')->nullable();
            $table->dateTime('reported_arrival_timestamp')->nullable();
            $table->string('reported_arrival_kms')->nullable();
            $table->string('reported_vehicle_plate_number')->nullable();
            $table->smallInteger('status');
            $table->json('status_info');
            $table->smallInteger('reprocess_status');
            $table->smallInteger('return');
            $table->string('synchronized_downstream')->nullable();
            $table->string('synchronized_upstream')->nullable();
            $table->unsignedBigInteger('province_id')->nullable();
            $table->integer('sale_tickets_drivers');
            $table->text('notes_drivers')->nullable();
            $table->text('itinerary_drivers')->nullable();
            $table->string('cost_if_externalized')->nullable();

            $table->timestamp('created')->nullable();

            $table->timestamp('modified')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
