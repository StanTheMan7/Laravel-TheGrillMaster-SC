<?php

namespace Database\Seeders;

use App\Models\User;
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
            RoleSeeder::class,
            UserSeeder::class,
            BookTableSeeder::class,
            CarrousselSeeder::class,
            FooterSeeder::class,
            HappyCustomerSeeder::class,
            HeureSeeder::class,
            LoveSteakSeeder::class,
            NavbarSeeder::class,
            PortfolioSeeder::class,
            TitreSeeder::class,
            WarmWelcomeSeeder::class
        ]);

       User::factory(5)->create();
    }
}
