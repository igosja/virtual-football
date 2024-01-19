<?php
declare(strict_types=1);

namespace App\Services\Team;

use App\Helpers\AgeHelper;
use App\Helpers\PositionHelper;
use App\Interfaces\Execute;
use App\Models\CountryName;
use App\Models\CountrySurname;
use App\Models\Team;
use App\Services\Player\CreatePlayerService;

/**
 * Class CreateTeamPlayersService
 * @package App\Services\Team
 */
class CreateTeamPlayersService implements Execute
{
    const POSITION_LIST = [
        PositionHelper::GK,
        PositionHelper::GK,
        PositionHelper::LD,
        PositionHelper::LD,
        PositionHelper::CD,
        PositionHelper::CD,
        PositionHelper::CD,
        PositionHelper::CD,
        PositionHelper::RD,
        PositionHelper::RD,
        PositionHelper::LM,
        PositionHelper::LM,
        PositionHelper::CM,
        PositionHelper::CM,
        PositionHelper::CM,
        PositionHelper::CM,
        PositionHelper::RM,
        PositionHelper::RM,
        PositionHelper::CF,
        PositionHelper::CF,
        PositionHelper::CF,
        PositionHelper::CF,
    ];

    /**
     * @var int|null $countryId
     */
    private ?int $countryId;

    /**
     * @var int $teamId
     */
    private int $teamId;

    /**
     * @var array $userSurnameIds
     */
    private array $userSurnameIds = [];

    /**
     * @param int $teamId
     */
    public function __construct(int $teamId)
    {
        $this->teamId = $teamId;
    }

    /**
     * @return bool
     */
    public function execute(): bool
    {
        $this->setCountryId();
        return $this->createTeamPlayers();
    }

    /**
     * @return void
     */
    private function setCountryId(): void
    {
        /**
         * @var Team $team
         */
        $team = Team::findOrFail($this->teamId);
        $this->countryId = $team->stadium->city->country_id;
    }

    /**
     * @return bool
     */
    private function createTeamPlayers(): bool
    {
        for ($i = 0, $countPosition = count(self::POSITION_LIST); $i<$countPosition; $i++) {
            (new CreatePlayerService(
                $this->getAge($i),
                $this->countryId,
                $this->getFatigue(),
                $this->getNameId(),
                $this->getPosition($i),
                $this->getPower($i),
                $this->getSurnameId(),
                $this->teamId
            ))->execute();
        }

        return true;
    }

    /**
     * @param int $index
     * @return int
     */
    private function getAge(int $index): int
    {
        $age = AgeHelper::MIN_AGE + $index;
        if ($age > AgeHelper::MAX_AGE) {
            $age = $age - AgeHelper::MIN_AGE;
        }

        return $age;
    }

    private function getFatigue()
    {
        return 50;
    }

    /**
     * @return int
     */
    private function getNameId(): int
    {
        /**
         * @var CountryName $countryName
         */
        $countryName = CountryName::where('country_id', $this->countryId)->inRandomOrder()->firstOrFail();
        return $countryName->name_id;
    }

    /**
     * @param int $index
     * @return int
     */
    private function getPosition(int $index): int
    {
        return self::POSITION_LIST[$index];
    }

    /**
     * @param int $index
     * @return int
     */
    private function getPower(int $index): int
    {
        return $this->getAge($index) * 2;
    }

    /**
     * @return int
     */
    private function getSurnameId(): int
    {
        /**
         * @var CountrySurname $countrySurname
         */
        $countrySurname = CountrySurname::where('country_id', 8)
            ->selectRaw('*, popularity * RAND() as popularity')
            ->whereNotIn('surname_id', $this->userSurnameIds)
            ->orderBy('popularity', 'desc')
            ->firstOrFail();

        $this->userSurnameIds[] = $countrySurname->surname_id;

        return $countrySurname->surname_id;
    }
}
