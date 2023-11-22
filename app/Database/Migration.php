<?php
declare(strict_types=1);

namespace App\Database;

use App\Traits\MigrationFloatDate;

/**
 * Class Migration
 * @package Database
 */
abstract class Migration extends \Illuminate\Database\Migrations\Migration
{
    use MigrationFloatDate;
}
