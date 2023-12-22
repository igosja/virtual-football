<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\Stadium\IndexRequest;
use App\Http\Requests\Stadium\StoreRequest;
use App\Http\Requests\Stadium\UpdateRequest;
use App\Http\Resources\Stadium\StadiumResource;
use App\Models\Stadium;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

/**
 * Class StadiumController
 * @package App\Http\Controllers
 */
class StadiumController extends AbstractController
{
    /**
     * @param IndexRequest $request
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

        $stadiums = Stadium::orderBy($sortingField, $sortingOrder);
        if ($request->validated('filters.id')) {
            $stadiums = $stadiums->where('id', $request->validated('filters.id'));
        }
        if ($request->validated('filters.capacity')) {
            $stadiums = $stadiums->where('capacity', $request->validated('filters.capacity'));
        }
        if ($request->validated('filters.city_id')) {
            $stadiums = $stadiums->where('city_id', $request->validated('filters.city_id'));
        }
        if ($request->validated('filters.name')) {
            $stadiums = $stadiums->where('name', 'like', '%' . $request->validated('filters.name') . '%');
        }
        $stadiums = $stadiums->paginate();

        return StadiumResource::collection($stadiums);
    }

    /**
     * @param Stadium $stadium
     * @return StadiumResource
     */
    public function show(Stadium $stadium): StadiumResource
    {
        return new StadiumResource($stadium);
    }

    /**
     * @param StoreRequest $request
     * @return StadiumResource
     */
    public function store(StoreRequest $request): StadiumResource
    {
        $stadium = Stadium::create($request->validated());
        return new StadiumResource($stadium);
    }

    /**
     * @param UpdateRequest $request
     * @param Stadium $stadium
     * @return StadiumResource
     */
    public function update(UpdateRequest $request, Stadium $stadium): StadiumResource
    {
        $stadium->update($request->validated());
        return new StadiumResource($stadium);
    }
}
