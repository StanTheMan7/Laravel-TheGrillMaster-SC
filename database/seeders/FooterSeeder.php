<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('footers')->insert([
            [
                'titre' => 'Copyright 2019. Designed by DISTINCTIVE THEMES',
                'emoji' => 'fa fa-twitter'
            ],
            [
                'titre' => '',
                'emoji' => 'fa fa-pinterest'
            ],
            [
                'titre' => '',
                'emoji' => 'fa fa-dribbble'
            ],
            [
                'titre' => '',
                'emoji' => 'fa fa-facebook'
            ],
            [
                'titre' => '',
                'emoji' => 'fa fa-behance'
            ],
            [
                'titre' => '',
                'emoji' => 'fa fa-linkedin'
            ],
        ]);
    }
}
