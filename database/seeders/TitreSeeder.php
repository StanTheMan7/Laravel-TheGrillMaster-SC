<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('titres')->insert([
            [
                'titre' => 'From 1950'
            ],
            [
                'titre' => 'Restaurant'
            ],
            [
                'titre' => 'Bar & Lounge'
            ],
            [
                'titre' => 'A Warm Welcome'
            ],
            [
                'titre' => 'were very happy to see you'
            ],
            [
                'titre' => 'Our Acclaimed Chefs'
            ],
            [
                'titre' => 'dedicated to excellence'
            ],
            [
                'titre' => 'Our Happy Customers'
            ],
            [
                'titre' => 'satisfaction, everytime'
            ],
            [
                'titre' => 'Book Your Table'
            ],
        ]);
    }
}
