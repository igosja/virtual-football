<?php
declare(strict_types=1);

namespace App\Services\Player;

use App\Interfaces\Execute;
use App\Models\PlayerPosition;

/**
 * Class CreatePlayerPositionService
 * @package App\Services\Player
 */
class CreatePlayerPositionService implements Execute
{
    /**
     * @var int $playerId
     */
    private int $playerId;

    /**
     * @var int $position
     */
    private int $position;

    /**
     * @param int $playerId
     * @param int $position
     */
    public function __construct(int $playerId, int $position)
    {
        $this->playerId = $playerId;
        $this->position = $position;
    }

    /**
     * @return bool
     */
    public function execute(): bool
    {
        return $this->createPlayerPosition();
    }

    /**
     * @return bool
     */
    private function createPlayerPosition(): bool
    {
        PlayerPosition::create([
            'player_id' => $this->playerId,
            'position' => $this->position,
        ]);

        return true;
    }
}
