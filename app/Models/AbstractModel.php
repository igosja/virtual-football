<?php

declare(strict_types=1);

namespace App\Models;

use App\Traits\ModelDateFormat;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AbstractModel
 * @package App\Models
 *
 * @method static create(array $attributes = [])
 * @see \Illuminate\Database\Eloquent\Builder::create
 *
 * @method static orderBy($column, $direction = 'asc')
 * @see \Illuminate\Database\Eloquent\Builder::orderBy
 */
abstract class AbstractModel extends Model
{
    use ModelDateFormat;
}
