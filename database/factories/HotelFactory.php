<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hotel>
 */
class HotelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "user_id" => fake()->randomElement(User::pluck("id")),
            "Hotel" => fake()->randomElement(["101 Ocean Beach", "Hillside", "Maya Villa", "dahun villas", "Soeliana Resort", "Punta Punta Resort"]),
            "Rooms" => fake()->randomElement(["Deluxe", "Couple", "Premium"]),
            "Price" => fake()->randomElement(["3,375", "6,967", "14,754"]),
            "Availability" => fake()->randomElement(["Fully Booked", "Available"]),
            "Reservation" => fake()->randomElement(["Approved", "Change Schedule", "Cancelled",'Pending']),
            "Payment" => fake()->randomElement(["Payment Success", "Payment Cancelled"]),
        ];
    }
}
