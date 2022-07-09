<?php

namespace Database\Factories;
use app\Models\Equips;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class EquipsFactory extends Factory
{
    protected $equips = Equip::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           'name' =>$this->faker -> name(),
           'entitats_id'=> $this -> faker -> unique()->randomElement([1,2,3,4])
        ];
    }
}
