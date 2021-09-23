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
                'icone' => '/'
            ],
            [
                'url' => '/',
                'titre' => 'BARRY SCOTT',
                'icone' => '/'
            ],
            [
                'url' => '/',
                'titre' => 'TOM SMOOTH',
                'icone' => '/'
            ],
            [
                'url' => '/',
                'titre' => 'HARVEY WALLACE',
                'icone' => '/'
            ],
        ]);
    }
}
