<?php
declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Player;
use App\Models\PlayerPosition;
use Illuminate\Database\Seeder;

/**
 * Class PlayerPositionSeeder
 * @package Database\Seeders
 */
class PlayerPositionSeeder extends Seeder
{
    /**
     * @return void
     */
    public function run(): void
    {
        Player::chunk(100, function ($players) {
            foreach ($players as $player) {
                PlayerPosition::create(['player_id' => $player->id, 'position' => rand(1, 10)]);
            }
        });
    }
}