<?php
declare(strict_types=1);

namespace App\Models;

/**
 * Class BaseSchool
 * @package App\Models
 *
 * @property int id
 * @property int build_speed
 * @property float created_at
 * @property int level
 * @property int min_base_level
 * @property int player_count
 * @property int power
 * @property int price_buy
 * @property int price_sell
 * @property int school_speed
 * @property float updated_at
 * @property bool with_special
 * @property bool with_style
 */
class BaseSchool extends AbstractModel
{
    /**
     * @var string[] $fillable
     */
    protected $fillable = [
        'build_speed',
        'level',
        'min_base_level',
        'player_count',
        'power',
        'price_buy',
        'price_sell',
        'school_speed',
        'with_special',
        'with_style',
    ];
}
