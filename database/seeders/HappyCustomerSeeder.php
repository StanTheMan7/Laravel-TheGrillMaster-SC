<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HappyCustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('happy_customers')->insert([
            [
                'url' => '/',
                'titre' => 'CHARLES DAVIES',
                'icone' => '/',
                'description' => 'Is post each that just leaf no. He connection interested so we an sympathize advantages. To said is it shed want do. Occasional middletons everything so to. Have spot part for his quit may. End sitting shewing who saw besides son musical adapted. Contrasted interested eat alteration pianoforte sympathize was.'
            ],            [
                'url' => '/',
                'titre' => 'CHARLES DAVIES',
                'icone' => '/',
                'description' => 'Is post each that just leaf no. He connection interested so we an sympathize advantages. To said is it shed want do. Occasional middletons everything so to. Have spot part for his quit may. End sitting shewing who saw besides son musical adapted. Contrasted interested eat alteration pianoforte sympathize was.'
            ],
        ]);
    }
}
