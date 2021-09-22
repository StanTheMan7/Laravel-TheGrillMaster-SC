<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            BookTableSeeder::class,
            CarrousselSeeder::class,
            FooterSeeder::class,
            HappyCustomerSeeder::class,
            HeureSeeder::class,
            LoveSteakSeeder::class,
            NavbarSeeder::class,
            PortfolioSeeder::class,
            RoleSeeder::class,
            TitreSeeder::class,
            WarmWelcomeSeeder::class
        ]);

        \App\Models\User::factory(5)->create();
    }
}
