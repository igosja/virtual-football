<?php
declare(strict_types=1);

namespace App\Http\Requests\Country;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class IndexRequest
 * @package App\Http\Requests\Country
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
            'sorting' => ['sometimes'],
        ];
    }
}
