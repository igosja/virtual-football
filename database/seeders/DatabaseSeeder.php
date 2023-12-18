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
//        PersonalAccessToken::factory()->create();
//        User::factory()->create();
        $this->call([
            CountrySeeder::class,
        ]);
    }
}
