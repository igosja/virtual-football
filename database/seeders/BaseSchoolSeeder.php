<?php
declare(strict_types=1);

namespace Database\Seeders;

use App\Models\BaseSchool;
use Illuminate\Database\Seeder;

/**
 * Class TeamSeeder
 * @package Database\Seeders
 */
class BaseSchoolSeeder extends Seeder
{
    /**
     * @var array|array[] $data
     */
    private array $data = [
        [
            'build_speed' => 0,
            'created_at' => 1704891216,
            'level' => 0,
            'min_base_level' => 0,
            'player_count' => 0,
            'power' => 0,
            'price_buy' => 0,
            'price_sell' => 0,
            'school_speed' => 0,
            'updated_at' => 1704891216,
            'with_special' => 0,
            'with_style' => 0,
        ],
        [
            'build_speed' => 1,
            'created_at' => 1704891216,
            'level' => 1,
            'min_base_level' => 1,
            'player_count' => 2,
            'power' => 34,
            'price_buy' => 250000,
            'price_sell' => 187500,
            'school_speed' => 14,
            'updated_at' => 1704891216,
            'with_special' => 0,
            'with_style' => 0,
        ],
        [
            'build_speed' => 2,
            'created_at' => 1704891216,
            'level' => 2,
            'min_base_level' => 1,
            'player_count' => 2,
            'power' => 36,
            'price_buy' => 500000,
            'price_sell' => 375000,
            'school_speed' => 14,
            'updated_at' => 1704891216,
            'with_special' => 0,
            'with_style' => 0,
        ],
        [
            'build_speed' => 3,
            'created_at' => 1704891216,
            'level' => 3,
            'min_base_level' => 2,
            'player_count' => 2,
            'power' => 38,
            'price_buy' => 750000,
            'price_sell' => 562500,
            'school_speed' => 13,
            'updated_at' => 1704891216,
            'with_special' => 1,
            'with_style' => 0,
        ],
        [
            'build_speed' => 4,
            'created_at' => 1704891216,
            'level' => 4,
            'min_base_level' => 2,
            'player_count' => 2,
            'power' => 40,
            'price_buy' => 1000000,
            'price_sell' => 750000,
            'school_speed' => 13,
            'updated_at' => 1704891216,
            'with_special' => 1,
            'with_style' => 0,
        ],
        [
            'build_speed' => 5,
            'created_at' => 1704891216,
            'level' => 5,
            'min_base_level' => 3,
            'player_count' => 2,
            'power' => 42,
            'price_buy' => 1250000,
            'price_sell' => 937500,
            'school_speed' => 12,
            'updated_at' => 1704891216,
            'with_special' => 2,
            'with_style' => 0,
        ],
        [
            'build_speed' => 6,
            'created_at' => 1704891216,
            'level' => 6,
            'min_base_level' => 3,
            'player_count' => 2,
            'power' => 44,
            'price_buy' => 1500000,
            'price_sell' => 1125000,
            'school_speed' => 12,
            'updated_at' => 1704891216,
            'with_special' => 2,
            'with_style' => 0,
        ],
        [
            'build_speed' => 7,
            'created_at' => 1704891216,
            'level' => 7,
            'min_base_level' => 4,
            'player_count' => 2,
            'power' => 46,
            'price_buy' => 1750000,
            'price_sell' => 1312500,
            'school_speed' => 11,
            'updated_at' => 1704891216,
            'with_special' => 2,
            'with_style' => 1,
        ],
        [
            'build_speed' => 8,
            'created_at' => 1704891216,
            'level' => 8,
            'min_base_level' => 4,
            'player_count' => 2,
            'power' => 48,
            'price_buy' => 2000000,
            'price_sell' => 1500000,
            'school_speed' => 11,
            'updated_at' => 1704891216,
            'with_special' => 2,
            'with_style' => 1,
        ],
        [
            'build_speed' => 9,
            'created_at' => 1704891216,
            'level' => 9,
            'min_base_level' => 5,
            'player_count' => 2,
            'power' => 50,
            'price_buy' => 2250000,
            'price_sell' => 1687500,
            'school_speed' => 10,
            'updated_at' => 1704891216,
            'with_special' => 2,
            'with_style' => 2,
        ],
        [
            'build_speed' => 10,
            'created_at' => 1704891216,
            'level' => 10,
            'min_base_level' => 5,
            'player_count' => 2,
            'power' => 52,
            'price_buy' => 2500000,
            'price_sell' => 1875000,
            'school_speed' => 10,
            'updated_at' => 1704891216,
            'with_special' => 2,
            'with_style' => 2,
        ],
    ];

    /**
     * @return void
     */
    public function run(): void
    {
        BaseSchool::insert($this->data);
    }
}
