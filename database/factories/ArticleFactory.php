<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
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
        return [
            'tittle' => $this->faker->sentence(mt_rand(2,8)),
            'content'=>($this->faker -> sentence(mt_rand(5,10))),
            'image' => $this->faker->unique()->imageUrl(),
            'user_id' => User::all(['id'])->random(),
            'category_id' => Category::all(['id'])->random(),
        ];
    }
}
