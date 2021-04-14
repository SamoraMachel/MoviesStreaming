<?php

namespace Database\Factories;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;

class MovieFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Movie::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text(20),
            'description' => $this->faker->paragraph(),
            'releaseYear' => $this->faker->year(),
            'runningTime' => $this->faker->time(),
            'quality' => $this->faker->word(),
            'age' => $this->faker->numberBetween(6, 50),
            'rating' => $this->faker->numberBetween(1, 10),
            'views' => $this->faker->numberBetween(0, 5000),
            'coverPic' => $this->faker->filePath(),
            'video' => $this->faker->filePath(),
            'trailer' => $this->faker->filePath(),
            'status' => $this->faker->word()
        ];
    }
}
