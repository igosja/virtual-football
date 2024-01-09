<?php
declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;

/**
 * Class DatabaseSeeder
 * @package Database\Seeders
 */
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            RoleSeeder::class,
            CountrySeeder::class,
            CitySeeder::class,
            StadiumSeeder::class,
            TeamSeeder::class,
            NameSeeder::class,
            CountryNameSeeder::class,
            SurnameSeeder::class,
            CountrySurnameSeeder::class,
            PlayerSeeder::class,
        ]);
    }
}
