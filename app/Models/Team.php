<?php
declare(strict_types=1);

namespace App\Models;

/**
 * Class Team
 * @package App\Models
 *
 * @property int id
 * @property int created_at
 * @property string name
 * @property int stadium_id
 * @property int updated_at
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
