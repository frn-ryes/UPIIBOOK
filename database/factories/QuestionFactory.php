<?php

namespace Database\Factories;

use App\Models\Question;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuestionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Question::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this -> faker -> city,
            'description' => $this -> faker -> paragraph(),
            'career' => $this -> faker -> randomElement(['Administracion Industrial','Ingeniería Industrial','Ingeniería en Transporte','Ciencias de la Informática','Ingeniería en Informática']),
            'status'=> $this -> faker -> randomDigitNotNull,
        ];
    }
}
