<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\Country\IndexRequest;
use App\Http\Requests\Country\StoreRequest;
use App\Http\Requests\Country\UpdateRequest;
use App\Http\Resources\Country\CountryResource;
use App\Models\Country;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

/**
 * Class CountryController
 * @package App\Http\Controllers
 */
class CountryController extends AbstractController
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

        $countries = Country::orderBy($sortingField, $sortingOrder);
        if ($request->validated('filters.id')) {
            $countries = $countries->where('id', $request->validated('filters.id'));
        }
        if ($request->validated('filters.name')) {
            $countries = $countries->where('name', 'like', '%' . $request->validated('filters.name') . '%');
        }
        $countries = $countries->paginate();

        return CountryResource::collection($countries);
    }

    /**
     * @param Country $country
     * @return CountryResource
     */
    public function show(Country $country): CountryResource
    {
        return new CountryResource($country);
    }

    /**
     * @param StoreRequest $request
     * @return CountryResource
     */
    public function store(StoreRequest $request): CountryResource
    {
        $country = Country::create($request->validated());
        return new CountryResource($country);
    }

    /**
     * @param UpdateRequest $request
     * @param Country $country
     * @return CountryResource
     */
    public function update(UpdateRequest $request, Country $country): CountryResource
    {
        $country->update($request->validated());
        return new CountryResource($country);
    }
}
