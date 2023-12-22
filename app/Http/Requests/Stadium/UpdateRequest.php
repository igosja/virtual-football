<?php
declare(strict_types=1);

namespace App\Http\Requests\Stadium;

use App\Models\City;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

/**
 * Class UpdateRequest
 * @package App\Http\Requests\Stadium
 */
class UpdateRequest extends FormRequest
{
    /**
     * @return array[]
     */
    public function rules(): array
    {
        return [
            'capacity' => ['required', 'int', 'min:1000', 'max:100000'],
            'city_id' => ['required', 'int', 'min:1', Rule::exists(City::class, 'id')],
            'name' => ['required', 'string', 'max:255'],
        ];
    }
}
