<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            'title' => $this->faker->unique()->text(50),
            'img'=> $this->faker->imageUrl(),
            'description'=> $this->faker->text(400),
            'slug'=> Str::slug($this->faker->name),
            'parent_id'=>  $this->faker->numberBetween(null,20),
        ];
    }
}
