<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\Team\IndexRequest;
use App\Http\Requests\Team\StoreRequest;
use App\Http\Requests\Team\UpdateRequest;
use App\Http\Resources\Team\TeamResource;
use App\Models\Team;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

/**
 * Class TeamController
 * @package App\Http\Controllers
 */
class TeamController extends AbstractController
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

        $teams = Team::orderBy($sortingField, $sortingOrder);
        if ($request->validated('filters.id')) {
            $teams = $teams->where('id', $request->validated('filters.id'));
        }
        if ($request->validated('filters.name')) {
            $teams = $teams->where('name', 'like', '%' . $request->validated('filters.name') . '%');
        }
        if ($request->validated('filters.stadium_id')) {
            $teams = $teams->where('stadium_id', $request->validated('filters.stadium_id'));
        }
        $teams = $teams->paginate();

        return TeamResource::collection($teams);
    }

    /**
     * @param Team $team
     * @return TeamResource
     */
    public function show(Team $team): TeamResource
    {
        return new TeamResource($team);
    }

    /**
     * @param StoreRequest $request
     * @return TeamResource
     */
    public function store(StoreRequest $request): TeamResource
    {
        $team = Team::create($request->validated());
        return new TeamResource($team);
    }

    /**
     * @param UpdateRequest $request
     * @param Team $team
     * @return TeamResource
     */
    public function update(UpdateRequest $request, Team $team): TeamResource
    {
        $team->update($request->validated());
        return new TeamResource($team);
    }
}
