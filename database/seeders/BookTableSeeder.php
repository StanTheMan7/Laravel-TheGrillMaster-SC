<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('book_tables')->insert([
            [
                'building' => 'Florence Building',
                'adresse' => 'Kings Square London, LDN1 23',
                'telephone' => '+448754 658 048'
            ]
        ]);
    }
}
