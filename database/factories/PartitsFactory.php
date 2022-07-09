<?php

namespace Database\Factories;
use app\Models\Partits;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class PartitsFactory extends Factory
{
    protected $partits = Partits::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'equip_local'=> $this -> faker ->randomElement([1,2,3]), 
            'equip_visitant'=> $this -> faker ->randomElement([1,2,3]),
            'data_partit' => $this->faker->date(),
            'hora_partit' => $this->faker->time()
        ];
    }
}