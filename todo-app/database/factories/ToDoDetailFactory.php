<?php

namespace Database\Factories;

use App\Models\ToDoDetail;
use Illuminate\Database\Eloquent\Factories\Factory;

class ToDoDetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ToDoDetail::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'completed_flag' => $this->faker->boolean(),
        ];
    }
}
