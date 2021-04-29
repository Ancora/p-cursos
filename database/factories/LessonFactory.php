<?php

namespace Database\Factories;

use App\Models\Lesson;
use Illuminate\Database\Eloquent\Factories\Factory;

class LessonFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Lesson::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(),
            'url' => 'https://youtu.be/p6QEf2rS5QA',
            'iframe' => '<iframe width="640" height="480" src="https://www.youtube.com/embed/p6QEf2rS5QA" frameborder="0" allow="picture-in-picture" allowfullscreen></iframe>',
            'platform_id' => 1,
        ];
    }
}
