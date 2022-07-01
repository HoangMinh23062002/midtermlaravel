<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class RaucatagoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
           
                'name' => $this->faker->name(),
                'frice' => rand(1,999)."000000",
                'image' => $this->faker->name(),

                'title' => $this->faker->name(),
                'id_category' => rand(1,3),
           
        ];
    }
}
