<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Video>
 */
class VideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $faker = \Faker\Factory::create();
        $faker->addProvider(new \Faker\Provider\Youtube($faker));

        return [
            "title" => $this->faker->sentence(3, true),
            "description" => $this->faker->sentence(6, true),
            "url" => $faker->youtubeUri(),
            "user_id" => 1
        ];
    }
}
