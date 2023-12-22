<?php
declare(strict_types=1);

namespace App\Http\Requests\Stadium;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class IndexRequest
 * @package App\Http\Requests\Stadium
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
            'filters.capacity' => ['sometimes'],
            'filters.city_id' => ['sometimes'],
            'filters.name' => ['sometimes'],
            'sorting' => ['sometimes'],
        ];
    }
}
