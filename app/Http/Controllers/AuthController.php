<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\SignupRequest;
use App\Models\User;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

/**
 * Class AuthController
 * @package App\Http\Controllers
 */
class AuthController extends AbstractController
{
    /**
     * @param LoginRequest $request
     * @return JsonResource
     * @throws ValidationException
     */
    public function adminLogin(LoginRequest $request): JsonResource
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

    /**
     * @param LoginRequest $request
     * @return JsonResource
     * @throws ValidationException
     */
    public function login(LoginRequest $request): JsonResource
    {
        $user = User::where('login', $request->validated('login'))->first();

        if (!$user || !Hash::check($request->validated('password'), $user->password)) {
            throw ValidationException::withMessages([
                'login' => ['The provided credentials are incorrect.'],
            ]);
        }

        $token = $user->createToken('token');

        return new JsonResource(['token' => $token->plainTextToken]);
    }

    /**
     * @param SignupRequest $request
     * @return JsonResource
     */
    public function signup(SignupRequest $request): JsonResource
    {
        $user = new User();
        $user->email = $request->validated('email');
        $user->login = $request->validated('login');
        $user->password = Hash::make($request->validated('password'));
        $user->save();

        $token = $user->createToken('token');

        return new JsonResource(['token' => $token->plainTextToken]);
    }
}
