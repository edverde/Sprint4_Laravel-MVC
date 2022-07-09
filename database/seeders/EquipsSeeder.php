<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Equips;
class EquipsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $equips = new Equips();
        $equips->name = "Furcia de Murcia Futbol Club";
        $equips->entitats_id = 1;
        $equips->save();

        $equips = new Equips();
        $equips->name = "Los grandes Macobra";
        $equips->entitats_id = 1;
        $equips->save();
        
        $equips = new Equips();
        $equips->name = "Hospitalet Atletic";
        $equips->entitats_id = 2;
        $equips->save();

        $equips = new Equips();
        $equips->name = "Viva er Beti";
        $equips->entitats_id = 1;
        $equips->save();

        $equips = new Equips();
        $equips->name = "12 cagarro i esmorza ";
        $equips->entitats_id = 3;
        $equips->save();
    }
}
