<?php
declare(strict_types=1);

namespace App\Services\Team;

use App\Interfaces\Execute;
use App\Models\Team;

/**
 * Class CreateTeamService
 * @package App\Services\Team
 */
class CreateTeamService implements Execute
{
    /**
     * @var string $name
     */
    private string $name;

    /**
     * @var int $stadiumId
     */
    private int $stadiumId;

    /**
     * @var Team $team
     */
    private ?Team $team;

    /**
     * @param string $name
     * @param int $stadiumId
     */
    public function __construct(string $name, int $stadiumId)
    {
        $this->name = $name;
        $this->stadiumId = $stadiumId;
    }

    /**
     * @return bool
     */
    public function execute(): bool
    {
        $result = $this->createTeam();
        return $result && $this->createTeamPlayers();
    }

    /**
     * @return bool
     */
    private function createTeam(): bool
    {
        $this->team = Team::create([
            'name' => $this->name,
            'stadium_id' => $this->stadiumId,
        ]);

        return true;
    }

    /**
     * @return bool
     */
    private function createTeamPlayers(): bool
    {
        if (1 == $this->team->id) {
            return true;
        }
        return (new CreateTeamPlayersService($this->team->id))->execute();
    }
}
