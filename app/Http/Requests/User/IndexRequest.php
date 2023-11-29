<?php
declare(strict_types=1);

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class IndexRequest
 * @package App\Http\Requests\User
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
            'filters.login' => ['sometimes'],
            'sorting' => ['sometimes'],
        ];
    }
}
