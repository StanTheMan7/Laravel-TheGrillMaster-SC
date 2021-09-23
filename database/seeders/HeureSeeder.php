<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('heures')->insert([
            [
                'jour' => 'monday',
                'heure' => '11:00 AM - 11:00 PM'
            ],
            [
                'jour' => 'tuesday',
                'heure' => '11:00 AM - 11:00 PM'
            ],
            [
                'jour' => 'wednesday',
                'heure' => '11:00 AM - 11:00 PM'
            ],
            [
                'jour' => 'thursday',
                'heure' => '11:00 AM - 11:00 PM'
            ],
            [
                'jour' => 'friday',
                'heure' => '11:00 AM - 1:00 AM'
            ],
            [
                'jour' => 'saturday',
                'heure' => '11:00 AM - 1:00 AM'
            ],
            [
                'jour' => 'sunday',
                'heure' => '11:00 AM - 1:00APM'
            ],
        ]);
    }
}
