<?php

namespace Database\Seeders;
use App\Models\Equips;
use App\Models\Entitats;
use App\Models\Partits;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    //   $this->call(EntitatsSeeder::class);
    //   $this->call(EquipsSeeder::class);
        Entitats::factory(4)->create();
        Equips::factory(4)->create();
        Partits::factory(2)->create();
    }
}
