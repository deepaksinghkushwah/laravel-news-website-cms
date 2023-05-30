<?php

namespace Database\Factories;

use App\Models\PageCategories;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Page>
 */
class PageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cat_id' => rand(8,11),//PageCategories::all()->random()->id
            'title' => fake()->sentence(),
            'content' => fake()->text(1000),
            'description' => fake()->sentence(),
            'keywords' => implode(",",fake()->words("10")),
            'image' => 'noimg.png',
        ];
    }
}
