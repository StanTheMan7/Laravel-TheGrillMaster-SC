<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolios')->insert([
            [
                'url' => '/',
                'titre' => 'JOHN DOE',
                'icone' => 'fa fa-twitter'
            ],
            [
                'url' => '/',
                'titre' => 'BARRY SCOTT',
                'icone' => 'fa fa-pinterest'
            ],
            [
                'url' => '/',
                'titre' => 'TOM SMOOTH',
                'icone' => 'fa fa-dribbble'
            ],
            [
                'url' => '/',
                'titre' => 'HARVEY WALLACE',
                'icone' => 'fa fa-facebook'
            ],
            [
                'url' => '/',
                'titre' => 'HARVEY WALLACE',
                'icone' => 'fa fa-behance'
            ],
            [
                'url' => '/',
                'titre' => 'HARVEY WALLACE',
                'icone' => 'fa fa-linkedin'
            ],
        ]);
    }
}
