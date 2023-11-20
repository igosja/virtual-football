<?php
declare(strict_types=1);

namespace App\Traits;

/**
 * Trait ModelDateFormat
 * @package App\Traits
 */
trait ModelDateFormat
{
    public function __construct()
    {
        $this->dateFormat = 'U.u';
    }
}
