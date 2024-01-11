<?php
declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Base;
use Illuminate\Database\Seeder;

/**
 * Class BaseSeeder
 * @package Database\Seeders
 */
class BaseSeeder extends Seeder
{
    /**
     * @var array|array[] $data
     */
    private array $data = [
        [
            'build_speed' => 0,
            'created_at' => 1704891216,
            'level' => 0,
            'maintenance_base' => 0,
            'maintenance_slot' => 0,
            'price_buy' => 0,
            'price_sell' => 0,
            'slot_max' => 0,
            'slot_min' => 0,
            'updated_at' => 1704891216,
        ],
        [
            'build_speed' => 2,
            'created_at' => 1704891216,
            'level' => 1,
            'maintenance_base' => 50000,
            'maintenance_slot' => 25000,
            'price_buy' => 500000,
            'price_sell' => 375000,
            'slot_max' => 5,
            'slot_min' => 0,
            'updated_at' => 1704891216,
        ],
        [
            'build_speed' => 4,
            'created_at' => 1704891216,
            'level' => 2,
            'maintenance_base' => 100000,
            'maintenance_slot' => 50000,
            'price_buy' => 1000000,
            'price_sell' => 750000,
            'slot_max' => 10,
            'slot_min' => 3,
            'updated_at' => 1704891216,
        ],
        [
            'build_speed' => 6,
            'created_at' => 1704891216,
            'level' => 3,
            'maintenance_base' => 150000,
            'maintenance_slot' => 75000,
            'price_buy' => 2000000,
            'price_sell' => 1500000,
            'slot_max' => 15,
            'slot_min' => 8,
            'updated_at' => 1704891216,
        ],
        [
            'build_speed' => 8,
            'created_at' => 1704891216,
            'level' => 4,
            'maintenance_base' => 200000,
            'maintenance_slot' => 100000,
            'price_buy' => 3000000,
            'price_sell' => 2250000,
            'slot_max' => 20,
            'slot_min' => 13,
            'updated_at' => 1704891216,
        ],
        [
            'build_speed' => 10,
            'created_at' => 1704891216,
            'level' => 5,
            'maintenance_base' => 250000,
            'maintenance_slot' => 125000,
            'price_buy' => 4000000,
            'price_sell' => 3000000,
            'slot_max' => 25,
            'slot_min' => 18,
            'updated_at' => 1704891216,
        ],
        [
            'build_speed' => 12,
            'created_at' => 1704891216,
            'level' => 6,
            'maintenance_base' => 300000,
            'maintenance_slot' => 150000,
            'price_buy' => 5000000,
            'price_sell' => 3750000,
            'slot_max' => 30,
            'slot_min' => 23,
            'updated_at' => 1704891216,
        ],
        [
            'build_speed' => 14,
            'created_at' => 1704891216,
            'level' => 7,
            'maintenance_base' => 350000,
            'maintenance_slot' => 175000,
            'price_buy' => 6000000,
            'price_sell' => 4500000,
            'slot_max' => 35,
            'slot_min' => 28,
            'updated_at' => 1704891216,
        ],
        [
            'build_speed' => 16,
            'created_at' => 1704891216,
            'level' => 8,
            'maintenance_base' => 400000,
            'maintenance_slot' => 200000,
            'price_buy' => 7000000,
            'price_sell' => 5250000,
            'slot_max' => 40,
            'slot_min' => 33,
            'updated_at' => 1704891216,
        ],
        [
            'build_speed' => 18,
            'created_at' => 1704891216,
            'level' => 9,
            'maintenance_base' => 450000,
            'maintenance_slot' => 225000,
            'price_buy' => 8000000,
            'price_sell' => 6000000,
            'slot_max' => 45,
            'slot_min' => 38,
            'updated_at' => 1704891216,
        ],
        [
            'build_speed' => 20,
            'created_at' => 1704891216,
            'level' => 10,
            'maintenance_base' => 500000,
            'maintenance_slot' => 250000,
            'price_buy' => 10000000,
            'price_sell' => 7500000,
            'slot_max' => 50,
            'slot_min' => 43,
            'updated_at' => 1704891216,
        ],
    ];

    /**
     * @return void
     */
    public function run(): void
    {
        Base::insert($this->data);
    }
}
