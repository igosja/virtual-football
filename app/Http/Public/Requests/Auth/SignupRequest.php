<?php
declare(strict_types=1);

namespace App\Http\Public\Requests\Auth;

use App\Http\Public\Requests\AbstractRequest;
use Illuminate\Validation\Rules\Password;

/**
 * Class SignupRequest
 * @package App\Http\Public\Requests\Auth
 */
class SignupRequest extends AbstractRequest
{
    /**
     * @return array[]
     */
    public function rules(): array
    {
        return [
            'login' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'password' => ['required', Password::min(6)->letters()->numbers()],
        ];
    }
}
