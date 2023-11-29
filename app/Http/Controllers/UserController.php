<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\User\IndexRequest;
use App\Http\Resources\User\UserResource;
use App\Models\User;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

/**
 * Class UserController
 * @package App\Http\Controllers
 */
class UserController extends AbstractController
{
    /**
     * @return AnonymousResourceCollection
     */
    public function index(IndexRequest $request): AnonymousResourceCollection
    {
        $sortingField = 'id';
        $sortingOrder = 'desc';
        $sorting = $request->validated('sorting');
        if ($sorting) {
            if ('-' != $sorting[0]) {
                $sortingOrder = 'asc';
            } else {
                $sorting = substr($sorting, 1);
            }
            $sortingField = $sorting;
        }

        $dishes = User::orderBy($sortingField, $sortingOrder);
        if ($request->validated('filters.id')) {
            $dishes = $dishes->where('id', $request->validated('filters.id'));
        }
        if ($request->validated('filters.login')) {
            $dishes = $dishes->where('login', 'like', '%' . $request->validated('filters.login') . '%');
        }
        $dishes = $dishes->paginate();

        return UserResource::collection($dishes);
    }

    /**
     * @param User $user
     * @return UserResource
     */
    public function show(User $user): UserResource
    {
        return new UserResource($user);
    }
}
