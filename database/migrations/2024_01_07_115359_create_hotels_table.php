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
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("user_id");
            $table->foreign("user_id")->references("id")->on("users");
            $table->enum("Hotel", ["101 Ocean Beach", "Hillside", "Maya Villa", "Dahun Villas", "Soeliana Resort", "Punta Punta Resort"]);
            $table->enum("Rooms", ["Deluxe", "Couple", "Premium"]);
            $table->enum("Price", ["3,375", "6,967","14,754"]);
            $table->enum("Availability",["Fully Booked", "Available"]);
            $table->enum("Reservation", ["Approved", "Change Schedule", "Cancelled", 'Pending']);
            $table->enum("Payment", ["Payment Success", "Payment Cancelled"]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
};
