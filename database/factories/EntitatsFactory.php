<?php

namespace Database\Factories;
use app\Models\Entitats;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class EntitatsFactory extends Factory
{
    protected $entiats = Entitat::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           'nom_club' =>$this->faker -> name(),
        ];
    }
}
