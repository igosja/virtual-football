<?php
declare(strict_types=1);

namespace App\Models;

use App\Traits\ModelDateFormat;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AbstractModel
 * @package App\Models
 */
abstract class AbstractModel extends Model
{
    use ModelDateFormat;
}
