<?php
declare(strict_types=1);

namespace App\Http\Requests\Team;

use App\Models\Stadium;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

/**
 * Class UpdateRequest
 * @package App\Http\Requests\Team
 */
class UpdateRequest extends FormRequest
{
    /**
     * @return array[]
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'stadium_id' => ['required', 'int', 'min:1', Rule::exists(Stadium::class, 'id')],
        ];
    }
}
