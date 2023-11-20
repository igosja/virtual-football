<?php
declare(strict_types=1);

namespace Database;

use Illuminate\Database\Schema\ColumnDefinition;

/**
 * Class Blueprint
 */
class Blueprint extends \Illuminate\Database\Schema\Blueprint
{
    /**
     * @param string $column
     * @return ColumnDefinition
     */
    public function floatDate(string $column): ColumnDefinition
    {
        return $this->unsignedFloat($column, 17, 6);
    }
}
