<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NavbarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('navbars')->insert([
            [
                'contenu' => 'About Us'
            ],
            [
                'contenu' => 'Special'
            ],
            [
                'contenu' => 'Our Menu'
            ],
            [
                'contenu' => 'Book a Table'
            ],
            [
                'contenu' => 'Extras'
            ],
        ]);
    }
}
