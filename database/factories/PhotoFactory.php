<?php

namespace Database\Factories;

use App\Models\Collection;
use App\Models\Photo;
use Illuminate\Database\Eloquent\Factories\Factory;

class PhotoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Photo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $num = $this->faker->unique()->numberBetween(1, 12);
        return [
            'title' => $this->faker->sentence(),
            'path' => "/images2/$num.png",
        ];
    }
}
