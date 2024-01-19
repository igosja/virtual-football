<?php
declare(strict_types=1);

namespace App\Interfaces;

interface Execute
{
    /**
     * @return bool
     */
    public function execute():bool;
}
