<?php
declare(strict_types=1);

namespace App\Services\Player;

use App\Interfaces\Execute;
use App\Models\Player;

/**
 * Class CreatePlayerService
 * @package App\Services\Player
 */
class CreatePlayerService implements Execute
{
    /**
     * @var int $age
     */
    private int $age;

    /**
     * @var int $countryId
     */
    private int $countryId;

    /**
     * @var int $fatigue
     */
    private int $fatigue;

    /**
     * @var int $nameId
     */
    private int $nameId;

    /**
     * @var Player|null $player
     */
    private ?Player $player;

    /**
     * @var int $position
     */
    private int $position;

    /**
     * @var int $power
     */
    private int $power;

    /**
     * @var int $surnameId
     */
    private int $surnameId;

    /**
     * @var int $teamId
     */
    private int $teamId;

    /**
     * @param int $age
     * @param int $countryId
     * @param int $fatigue
     * @param int $nameId
     * @param int $position
     * @param int $power
     * @param int $surnameId
     * @param int $teamId
     */
    public function __construct(
        int $age,
        int $countryId,
        int $fatigue,
        int $nameId,
        int $position,
        int $power,
        int $surnameId,
        int $teamId
    ) {
        $this->age = $age;
        $this->countryId = $countryId;
        $this->fatigue = $fatigue;
        $this->nameId = $nameId;
        $this->position = $position;
        $this->power = $power;
        $this->surnameId = $surnameId;
        $this->teamId = $teamId;
    }

    /**
     * @return bool
     */
    public function execute(): bool
    {
        $result = $this->createPlayer();
        return $result && $this->createPlayerPosition();
    }

    /**
     * @return bool
     */
    private function createPlayer(): bool
    {
        $this->player = Player::create([
            'age' => $this->age,
            'country_id' => $this->countryId,
            'fatigue' => $this->fatigue,
            'name_id' => $this->nameId,
            'power' => $this->power,
            'surname_id' => $this->surnameId,
            'team_id' => $this->teamId,
        ]);

        return true;
    }

    /**
     * @return bool
     */
    private function createPlayerPosition(): bool
    {
        return (new CreatePlayerPositionService($this->player->id, $this->position))->execute();
    }
}
