<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' =>$this->faker->sentence(mt_rand(3,6)),
            'slug' => $this->faker->unique()->slug(),
            'excerpt' => $this->faker->paragraph(mt_rand(3,5)),
            // 'body' => $this->faker->paragraphs(mt_rand(15,25)),
            'body' => collect($this->faker->paragraphs(mt_rand(10,15)))
                        ->map(function($p) {
                            return "<p>$p</p>";
                        })
                        ->implode(''),
            'category_id' => mt_rand(1,3),
            'user_id' => mt_rand(1,5)
        ];
    }
}
