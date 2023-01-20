<?php

namespace Database\Seeders;

use App\Models\Ucenik;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UcenikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ucenik1 = new Ucenik();
        $ucenik1->ime = 'Milan';
        $ucenik1->prezime = 'Rudan';
        $ucenik1->instrument = 'Klavir';
        $ucenik1->datum_rodjenja = '2000-7-2';
        $ucenik1->email = 'milanrudan@gmail.com';
        $ucenik1->save();

        $ucenik2 = new Ucenik();
        $ucenik2->ime = 'Jakov';
        $ucenik2->prezime = 'Srdic';
        $ucenik2->instrument = 'Klavir';
        $ucenik2->datum_rodjenja = '2002-9-12';
        $ucenik2->email = 'jakovsrdic@gmail.com';
        $ucenik2->save();


        $ucenik3 = new Ucenik();
        $ucenik3->ime = 'Jana';
        $ucenik3->prezime = 'Maric';
        $ucenik3->instrument = 'Violina';
        $ucenik3->datum_rodjenja = '2004-7-2';
        $ucenik3->email = 'janamaric@gmail.com';
        $ucenik3->save();


        $ucenik4 = new Ucenik();
        $ucenik4->ime = 'Sima';
        $ucenik4->prezime = 'Simic';
        $ucenik4->instrument = 'Saksofon';
        $ucenik4->datum_rodjenja = '2000-7-2';
        $ucenik4->email = 'simasimic@gmail.com';
        $ucenik4->save();
    }
}
