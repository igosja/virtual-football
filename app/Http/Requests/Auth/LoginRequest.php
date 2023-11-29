<?php
declare(strict_types=1);

namespace App\Http\Requests\Auth;

use App\Http\Requests\AbstractRequest;

/**
 * Class AdminLoginRequest
 * @package App\Http\Requests\Auth
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
