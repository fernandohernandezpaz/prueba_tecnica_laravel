<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('user_plans', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('currency_id');
            $table->unsignedBigInteger('next_user_plan_id')->nullable();
            $table->timestamp('start_timestamp')->nullable();
            $table->timestamp('end_timestamp')->nullable();
            $table->timestamp('renewal_timestamp')->nullable();
            $table->decimal('renewal_price', 10, 1)->nullable();
            $table->smallInteger('requires_invoice');
            $table->integer('status');
            $table->integer('financiation');
            $table->integer('status_financiation');
            $table->string('language');
            $table->string('nif');
            $table->string('business_name');
            $table->string('pending_payment');
            $table->date('date_max_payment')->nullable();
            $table->timestamp('proxim_start_timestamp')->nullable();
            $table->timestamp('proxim_end_timestamp')->nullable();
            $table->timestamp('proxim_renewal_timestamp')->nullable();
            $table->decimal('proxim_renewal_price', 10)->nullable();
            $table->decimal('credits_return', 10, 1);
            $table->unsignedBigInteger('company_id');
            $table->integer('cancel_employee');
            $table->integer('force_renovation');
            $table->date('date_canceled')->nullable();
            $table->boolean('amount_confirm_canceled')->nullable();
            $table->boolean('credit_confirm_canceled')->nullable();
            $table->integer('cost_center_id');


            $table->timestamp('created')->nullable();
            $table->timestamp('modified')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('user_plans');
    }
}
