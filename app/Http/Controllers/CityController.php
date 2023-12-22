<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\City\IndexRequest;
use App\Http\Requests\City\StoreRequest;
use App\Http\Requests\City\UpdateRequest;
use App\Http\Resources\City\CityResource;
use App\Models\City;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

/**
 * Class CityController
 * @package App\Http\Controllers
 */
class CityController extends AbstractController
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

        $cities = City::orderBy($sortingField, $sortingOrder);
        if ($request->validated('filters.id')) {
            $cities = $cities->where('id', $request->validated('filters.id'));
        }
        if ($request->validated('filters.country_id')) {
            $cities = $cities->where('country_id', $request->validated('filters.country_id'));
        }
        if ($request->validated('filters.name')) {
            $cities = $cities->where('name', 'like', '%' . $request->validated('filters.name') . '%');
        }
        $cities = $cities->paginate();

        return CityResource::collection($cities);
    }

    /**
     * @param City $city
     * @return CityResource
     */
    public function show(City $city): CityResource
    {
        return new CityResource($city);
    }

    /**
     * @param StoreRequest $request
     * @return CityResource
     */
    public function store(StoreRequest $request): CityResource
    {
        $city = City::create($request->validated());
        return new CityResource($city);
    }

    /**
     * @param UpdateRequest $request
     * @param City $city
     * @return CityResource
     */
    public function update(UpdateRequest $request, City $city): CityResource
    {
        $city->update($request->validated());
        return new CityResource($city);
    }
}
