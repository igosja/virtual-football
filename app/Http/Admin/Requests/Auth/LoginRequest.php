<?php
declare(strict_types=1);

namespace App\Http\Admin\Requests\Auth;

use App\Http\Public\Requests\AbstractRequest;

/**
 * Class LoginRequest
 * @package App\Http\Admin\Requests\Auth
 */
class LoginRequest extends AbstractRequest
{
    /**
     * @return array[]
     */
    public function rules(): array
    {
        return [
            'login' => ['required', 'string'],
            'password' => ['required'],
        ];
    }
}
