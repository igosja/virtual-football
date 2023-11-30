<?php
declare(strict_types=1);

namespace App\Http\Requests\City;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreRequest
 * @package App\Http\Requests\City
 */
class StoreRequest extends FormRequest
{
    /**
     * @return array[]
     */
    public function rules(): array
    {
        return [
            'country_id' => ['required', 'int', 'min:1', 'exists:App\Models\Country,id'],
            'name' => ['required', 'string', 'max:255', 'unique:App\Models\City'],
        ];
    }
}
