<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->unique()->name,
            'img'=> $this->faker->imageUrl(),
            'text'=> $this->faker->text(200),
            'description'=> $this->faker->text(400),
            'slug'=> Str::slug($this->faker->name),
            'active'=>  $this->faker->numberBetween(0,1),
            'vip'=>$this->faker->numberBetween(0,1),
            'vip_ends'=> $this->faker->date(),
            'user_id'=>$this->faker->numberBetween(1,20),
            'cat_id'=>$this->faker->numberBetween(1,20),
        ];
    }
}
