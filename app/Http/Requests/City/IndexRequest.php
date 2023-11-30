<?php
declare(strict_types=1);

namespace App\Http\Requests\City;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class IndexRequest
 * @package App\Http\Requests\City
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
            'filters.country_id' => ['sometimes'],
            'filters.name' => ['sometimes'],
            'sorting' => ['sometimes'],
        ];
    }
}
