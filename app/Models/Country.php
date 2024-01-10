<?php
declare(strict_types=1);

namespace App\Models;

/**
 * Class Country
 * @package App\Models
 *
 * @property int id
 * @property float created_at
 * @property string name
 * @property float updated_at
 */
class Country extends AbstractModel
{
    /**
     * @var string[] $fillable
     */
    protected $fillable = [
        'name',
    ];
}
