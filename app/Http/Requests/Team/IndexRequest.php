<?php
declare(strict_types=1);

namespace App\Http\Requests\Team;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class IndexRequest
 * @package App\Http\Requests\Team
 */
class IndexRequest extends FormRequest
{
    /**
     * @return array[]
     */
    public function rules(): array
    {
        return [
            'filters.id' => ['sometimes'],
            'filters.name' => ['sometimes'],
            'filters.stadium_id' => ['sometimes'],
            'sorting' => ['sometimes'],
        ];
    }
}
