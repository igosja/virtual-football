<?php
declare(strict_types=1);

namespace Database\Seeders;

use App\Models\City;
use App\Models\CountryName;
use App\Models\CountrySurname;
use App\Models\Player;
use App\Models\Stadium;
use App\Models\Team;
use Illuminate\Database\Seeder;

/**
 * Class PlayerSeeder
 * @package Database\Seeders
 */
class PlayerSeeder extends Seeder
{
    /**
     * @return void
     */
    public function run(): void
    {
        $teamList = Team::where('id', '!=', 1)->get();

        foreach ($teamList as $team) {
            $stadium = Stadium::where('id', $team->stadium_id)->firstOrFail();
            $city = City::where('id', $stadium->city_id)->firstOrFail();

            $ages = range(17, 35);
            foreach ($ages as $age) {
                $name = CountryName::where('country_id', $city->country_id)->inRandomOrder()->firstOrFail();
                $surname = CountrySurname::where('country_id', $city->country_id)->inRandomOrder()->firstOrFail();

                Player::create([
                    'age' => $age,
                    'country_id' => $city->country_id,
                    'name_id' => $name->name_id,
                    'power' => $age * 2,
                    'surname_id' => $surname->surname_id,
                    'team_id' => $team->id,
                ]);
            }
        }
    }
}
