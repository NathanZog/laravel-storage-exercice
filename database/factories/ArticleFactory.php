<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->word(),
            'description' => $this->faker->text(50),
            'date' => $this->faker->date(),
            'auteur' => $this->faker->name(),
            'image' => $this->faker->imageUrl(50,50)
        ];
    }
}
