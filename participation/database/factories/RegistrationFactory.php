<?php

namespace Database\Factories;

use App\Models\Registration;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Registration>
 */
class RegistrationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'event_id' => \App\Models\Event::factory(),
            'status' => $this->faker->randomElement(['pending', 'confirmed', 'cancelled']),
            'date' => $this->faker->dateTimeBetween('-1 year', 'now')->format('Y-m-d'),
            
        ];
    }
}
