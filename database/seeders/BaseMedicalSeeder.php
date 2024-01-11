<?php
declare(strict_types=1);

namespace Database\Seeders;

use App\Models\BaseMedical;
use Illuminate\Database\Seeder;

/**
 * Class BaseMedicalSeeder
 * @package Database\Seeders
 */
class BaseMedicalSeeder extends Seeder
{
    /**
     * @var array|array[] $data
     */
    private array $data = [
        [
            'build_speed' => 0,
            'created_at' => 1704891216,
            'fatigue' => 50,
            'level' => 0,
            'min_base_level' => 0,
            'price_buy' => 0,
            'price_sell' => 0,
            'updated_at' => 1704891216,
        ],
        [
            'build_speed' => 1,
            'created_at' => 1704891216,
            'fatigue' => 45,
            'level' => 1,
            'min_base_level' => 1,
            'price_buy' => 250000,
            'price_sell' => 187500,
            'updated_at' => 1704891216,
        ],
        [
            'build_speed' => 2,
            'created_at' => 1704891216,
            'fatigue' => 40,
            'level' => 2,
            'min_base_level' => 1,
            'price_buy' => 500000,
            'price_sell' => 375000,
            'updated_at' => 1704891216,
        ],
        [
            'build_speed' => 3,
            'created_at' => 1704891216,
            'fatigue' => 35,
            'level' => 3,
            'min_base_level' => 2,
            'price_buy' => 750000,
            'price_sell' => 562500,
            'updated_at' => 1704891216,
        ],
        [
            'build_speed' => 4,
            'created_at' => 1704891216,
            'fatigue' => 30,
            'level' => 4,
            'min_base_level' => 2,
            'price_buy' => 1000000,
            'price_sell' => 750000,
            'updated_at' => 1704891216,
        ],
        [
            'build_speed' => 5,
            'created_at' => 1704891216,
            'fatigue' => 25,
            'level' => 5,
            'min_base_level' => 3,
            'price_buy' => 1250000,
            'price_sell' => 937500,
            'updated_at' => 1704891216,
        ],
        [
            'build_speed' => 6,
            'created_at' => 1704891216,
            'fatigue' => 20,
            'level' => 6,
            'min_base_level' => 3,
            'price_buy' => 1500000,
            'price_sell' => 1125000,
            'updated_at' => 1704891216,
        ],
        [
            'build_speed' => 7,
            'created_at' => 1704891216,
            'fatigue' => 15,
            'level' => 7,
            'min_base_level' => 4,
            'price_buy' => 1750000,
            'price_sell' => 1312500,
            'updated_at' => 1704891216,
        ],
        [
            'build_speed' => 8,
            'created_at' => 1704891216,
            'fatigue' => 10,
            'level' => 8,
            'min_base_level' => 4,
            'price_buy' => 2000000,
            'price_sell' => 1500000,
            'updated_at' => 1704891216,
        ],
        [
            'build_speed' => 9,
            'created_at' => 1704891216,
            'fatigue' => 5,
            'level' => 9,
            'min_base_level' => 5,
            'price_buy' => 2250000,
            'price_sell' => 1687500,
            'updated_at' => 1704891216,
        ],
        [
            'build_speed' => 10,
            'created_at' => 1704891216,
            'fatigue' => 0,
            'level' => 10,
            'min_base_level' => 5,
            'price_buy' => 2500000,
            'price_sell' => 1875000,
            'updated_at' => 1704891216,
        ],
    ];

    /**
     * @return void
     */
    public function run(): void
    {
        BaseMedical::insert($this->data);
    }
}
