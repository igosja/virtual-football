<?php
declare(strict_types=1);

namespace App\Http\Admin\Controllers;

use App\Http\Public\Requests\Auth\LoginRequest;
use App\Http\Public\Requests\Auth\SignupRequest;
use App\Models\User;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

/**
 * Class AuthController
 * @package App\Http\Admin\Controllers
 */
class AuthController extends AbstractController
{
    /**
     * @param LoginRequest $request
     * @return JsonResource
     * @throws ValidationException
     */
    public function login(LoginRequest $request): JsonResource
    {
        $user = User::where('login', $request->validated('login'))->first();

        $password = $request->validated('password');
        if (!$user || !Hash::check($password, $user->password) || !$user->can('see_admin_chapter')) {
            throw ValidationException::withMessages([
                'login' => ['The provided credentials are incorrect.'],
            ]);
        }

        $token = $user->createToken('token');

        return new JsonResource(['token' => $token->plainTextToken]);
    }
}
