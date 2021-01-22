<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Event::class;

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
            'type' => $this -> faker -> randomElement(['Presencial','Virtual']),
            'career' => $this -> faker -> randomElement(['Administracion Industrial','Ingeniería Industrial','Ingeniería en Transporte','Ciencias de la Informática','Ingeniería en Informática']),
            'price' => $this -> faker -> randomFloat($nbMaxDecimals = 2, $min = 0, $max = 2000),
            'event_date' => $this -> faker -> dateTime($max = 'now', $timezone = NULL),
            'image'=> $this -> faker -> imageUrl($width = 640, $height = 480),
            'status'=> $this -> faker -> randomDigitNotNull,
        ];
    }
}
