<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained();
            $table->string('financial_currency')->default('USD');
            $table->foreignId('staff_id')->nullable()->constrained();
            $table->decimal('room_price_rate')->nullable()->default(null);
            $table->foreignId('room_id')->nullable()->default(null)->constrained();
            $table->dateTime('expected_arrival')->nullable()->default(null);
            $table->integer('number_of_days')->nullable()->default(null);
            $table->dateTime('expected_departure')->nullable()->default(null);
            $table->dateTime('checkin_date')->nullable()->default(null);
            $table->dateTime('checkout_date')->nullable()->default(null);
            $table->dateTime('reservation_date')->nullable()->default(null);
            $table->integer('number_of_people')->nullable()->default(null);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
