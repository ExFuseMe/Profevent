<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->title(),
            'date' => $this->faker->date(),
            'location' => $this->faker->address(),
            'time' => $this->faker->time(),
        ];
    }
}
