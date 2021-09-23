<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarrousselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carroussels')->insert([
            [
                'url' => '/'
            ],
            [
                'url' => '/'
            ],
            [
                'url' => '/'
            ],
        ]);
    }
}
