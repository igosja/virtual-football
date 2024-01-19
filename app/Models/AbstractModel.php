<?php

declare(strict_types=1);

namespace App\Models;

use App\Traits\ModelDateFormat;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AbstractModel
 * @package App\Models
 *
 * @method static static create(array $attributes = []) see \Illuminate\Database\Eloquent\Builder::create
 * @method static static findOrFail($id, $columns = ['*']) see \Illuminate\Database\Eloquent\Builder::findOrFail
 */
abstract class AbstractModel extends Model
{
    use ModelDateFormat;
}
