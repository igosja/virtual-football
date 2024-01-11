<?php
declare(strict_types=1);

namespace App\Models;

/**
 * Class BaseMedical
 * @package App\Models
 *
 * @property int id
 * @property int build_speed
 * @property float created_at
 * @property int fatigue
 * @property int level
 * @property int min_base_level
 * @property int price_buy
 * @property int price_sell
 * @property float updated_at
 */
class BaseMedical extends AbstractModel
{
    /**
     * @var string[] $fillable
     */
    protected $fillable = [
        'build_speed',
        'fatigue',
        'level',
        'min_base_level',
        'price_buy',
        'price_sell',
    ];
}
