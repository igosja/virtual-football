<?php
declare(strict_types=1);

namespace App\Models;

/**
 * Class Team
 * @package App\Models
 *
 * @property int id
 * @property float created_at
 * @property string name
 * @property int stadium_id
 * @property float updated_at
 */
class Team extends AbstractModel
{
    /**
     * @var string[] $fillable
     */
    protected $fillable = [
        'name',
        'stadium_id',
    ];
}
