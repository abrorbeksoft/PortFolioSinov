<?php

namespace Database\Factories;

use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Image::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->imageUrl(300,400,'animals'),
            'imageable_id'=>$this->faker->numberBetween(1,40),
            'imageable_type'=>"App\Models\News"
        ];
    }
}
