<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = $this->faker->sentence;
        $resume = $this->faker->paragraph;
        $slug = Str::slug($title);
        $content = $this->faker->paragraphs(3, true);
        $image = $this->faker->imageUrl();
    
        return [
            'title' => $title,
            'resume' => $resume,
            'slug' => $slug,
            'content' => $content,
            'image' => $image,
        ];
    }
}
