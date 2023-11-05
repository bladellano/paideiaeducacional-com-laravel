<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "title" => $this->faker->sentence(3,true),
            "description" => $this->faker->sentence(6,true),
            "image" => $this->faker->image('public/assets/images',640, 480, null, false),
            "event_date" => $this->faker->date(),
            "user_id" => 1
        ];
    }
}
