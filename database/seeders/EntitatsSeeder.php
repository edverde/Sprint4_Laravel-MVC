<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Entitats;

class EntitatsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $entitats = new Entitats();
        $entitats->nom_club = "Club Fanegas";
        $entitats->save();

        $entitats = new Entitats();
        $entitats->nom_club = "Club Santi Millán Salcedo";
        $entitats->save();

        $entitats = new Entitats();
        $entitats->nom_club = "Club Lina Morgan Freeman";
        $entitats->save();

        
    }
}
