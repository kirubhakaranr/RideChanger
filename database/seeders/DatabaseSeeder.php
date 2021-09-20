<?php

namespace Database\Seeders;

use App\Models\Country;
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
                    AdminUserSeeder::class,
                    CountrySeeder::class,
                    StateSeeder::class,
                    CitySeeder::class,
                ]);
    }
}
