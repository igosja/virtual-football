<?php
declare(strict_types=1);

namespace App\Models;

/**
 * Class Surname
 * @package App\Models
 *
 * @property int id
 * @property int created_at
 * @property string name
 * @property int updated_at
 */
class Surname extends AbstractModel
{
    /**
     * @var string[] $fillable
     */
    protected $fillable = [
        'name',
    ];
}
