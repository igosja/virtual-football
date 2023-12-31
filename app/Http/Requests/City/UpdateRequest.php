<?php
declare(strict_types=1);

namespace App\Http\Requests\City;

use App\Models\Country;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

/**
 * Class UpdateRequest
 * @package App\Http\Requests\City
 */
class UpdateRequest extends FormRequest
{
    /**
     * @return array[]
     */
    public function rules(): array
    {
        return [
            'country_id' => ['required', 'int', 'min:1', Rule::exists(Country::class, 'id')],
            'name' => ['required', 'string', 'max:255'],
        ];
    }
}
