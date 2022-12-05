<?php

namespace Database\Factories;

use App\Models\Service;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Consult>
 */
class ConsultFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => User::factory()->create()->id,
            'service_id' => Service::factory()->create()->id,
            'appointment' => $apnmt = fake()->dateTimeThisYear(),
            'is_completed' => $apnmt > now() ? false : true ,
            'rating' => $apnmt > now() ? null : fake()->numberBetween(0,50)
        ];
    }
}
