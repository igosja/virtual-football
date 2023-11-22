<?php
declare(strict_types=1);

namespace App\Traits;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\ColumnDefinition;

/**
 * Trait MigrationFloatDate
 * @package App\Traits
 */
trait MigrationFloatDate
{
    /**
     * @param string $column
     * @return ColumnDefinition
     */
    public function floatDate(string $column, Blueprint $table): ColumnDefinition
    {
        return $table->unsignedFloat($column, 17, 6);
    }
}
