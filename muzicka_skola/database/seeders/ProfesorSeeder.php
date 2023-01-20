<?php

namespace Database\Seeders;

use App\Models\Profesor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $p1 = new Profesor();
        $p1->ime = 'Srdjan';
        $p1->prezime = 'Samovic';
        $p1->predmet = 'Solfedjo';
        $p1->datum_rodjenja = '1986-7-2';
        $p1->email = 'srdjansamovic@gmail.com';
        $p1->radni_staz = 3;
        $p1->save();

        $p2 = new Profesor();
        $p2->ime = 'Sofija';
        $p2->prezime = 'Banjanin';
        $p2->predmet = 'Ritmika';
        $p2->datum_rodjenja = '1981-11-21';
        $p2->email = 'sofijabanjanin@gmail.com';
        $p2->radni_staz = 6;
        $p2->save();


        $p3 = new Profesor();
        $p3->ime = 'Magdalena';
        $p3->prezime = 'Ugrenovic';
        $p3->predmet = 'Uvod u klavir';
        $p3->datum_rodjenja = '1964-11-21';
        $p3->email = 'magdaugrenovic@gmail.com';
        $p3->radni_staz = 16;
        $p3->save();
    }
}
