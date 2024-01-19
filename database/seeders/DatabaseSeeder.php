<?php
declare(strict_types=1);

namespace Database\Seeders;

/**
 * Class DatabaseSeeder
 * @package Database\Seeders
 */
class DatabaseSeeder extends AbstractSeeder
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
            NameSeeder::class,
            CountryNameSeeder::class,
            SurnameSeeder::class,
            CountrySurnameSeeder::class,
            TeamSeeder::class,
        ]);
    }
}
