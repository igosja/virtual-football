<?php
declare(strict_types=1);

namespace Database\Seeders;

use App\Helpers\StageHelper;
use App\Helpers\TournamentTypeHelper;
use App\Models\Schedule;
use DateInterval;
use DateTime;
use DateTimeZone;

/**
 * Class ScheduleSeeder
 * @package Database\Seeders
 */
class ScheduleSeeder extends AbstractSeeder
{
    /**
     * @var string[] $list
     */
    private array $list = [
        ['stage' => StageHelper::ROUND_01, 'tournament_type' => TournamentTypeHelper::CHAMPIONSHIP],
        ['stage' => StageHelper::ROUND_02, 'tournament_type' => TournamentTypeHelper::CHAMPIONSHIP],
        ['stage' => StageHelper::ROUND_03, 'tournament_type' => TournamentTypeHelper::CHAMPIONSHIP],
        ['stage' => StageHelper::ROUND_04, 'tournament_type' => TournamentTypeHelper::CHAMPIONSHIP],
        ['stage' => StageHelper::ROUND_05, 'tournament_type' => TournamentTypeHelper::CHAMPIONSHIP],
        ['stage' => StageHelper::FRIENDLY, 'tournament_type' => TournamentTypeHelper::FRIENDLY],
        ['stage' => StageHelper::FRIENDLY, 'tournament_type' => TournamentTypeHelper::FRIENDLY],
        ['stage' => StageHelper::ROUND_06, 'tournament_type' => TournamentTypeHelper::CHAMPIONSHIP],
        ['stage' => StageHelper::ROUND_07, 'tournament_type' => TournamentTypeHelper::CHAMPIONSHIP],
        ['stage' => StageHelper::ROUND_08, 'tournament_type' => TournamentTypeHelper::CHAMPIONSHIP],
        ['stage' => StageHelper::ROUND_09, 'tournament_type' => TournamentTypeHelper::CHAMPIONSHIP],
        ['stage' => StageHelper::ROUND_10, 'tournament_type' => TournamentTypeHelper::CHAMPIONSHIP],
        ['stage' => StageHelper::ROUND_OF_32, 'tournament_type' => TournamentTypeHelper::CUP],
        ['stage' => StageHelper::FRIENDLY, 'tournament_type' => TournamentTypeHelper::FRIENDLY],
        ['stage' => StageHelper::ROUND_11, 'tournament_type' => TournamentTypeHelper::CHAMPIONSHIP],
        ['stage' => StageHelper::ROUND_12, 'tournament_type' => TournamentTypeHelper::CHAMPIONSHIP],
        ['stage' => StageHelper::ROUND_13, 'tournament_type' => TournamentTypeHelper::CHAMPIONSHIP],
        ['stage' => StageHelper::ROUND_14, 'tournament_type' => TournamentTypeHelper::CHAMPIONSHIP],
        ['stage' => StageHelper::ROUND_15, 'tournament_type' => TournamentTypeHelper::CHAMPIONSHIP],
        ['stage' => StageHelper::ROUND_OF_16, 'tournament_type' => TournamentTypeHelper::CUP],
        ['stage' => StageHelper::FRIENDLY, 'tournament_type' => TournamentTypeHelper::FRIENDLY],
        ['stage' => StageHelper::ROUND_16, 'tournament_type' => TournamentTypeHelper::CHAMPIONSHIP],
        ['stage' => StageHelper::ROUND_17, 'tournament_type' => TournamentTypeHelper::CHAMPIONSHIP],
        ['stage' => StageHelper::ROUND_18, 'tournament_type' => TournamentTypeHelper::CHAMPIONSHIP],
        ['stage' => StageHelper::ROUND_19, 'tournament_type' => TournamentTypeHelper::CHAMPIONSHIP],
        ['stage' => StageHelper::ROUND_20, 'tournament_type' => TournamentTypeHelper::CHAMPIONSHIP],
        ['stage' => StageHelper::QUARTER_FINAL, 'tournament_type' => TournamentTypeHelper::CUP],
        ['stage' => StageHelper::FRIENDLY, 'tournament_type' => TournamentTypeHelper::FRIENDLY],
        ['stage' => StageHelper::ROUND_21, 'tournament_type' => TournamentTypeHelper::CHAMPIONSHIP],
        ['stage' => StageHelper::ROUND_22, 'tournament_type' => TournamentTypeHelper::CHAMPIONSHIP],
        ['stage' => StageHelper::ROUND_23, 'tournament_type' => TournamentTypeHelper::CHAMPIONSHIP],
        ['stage' => StageHelper::ROUND_24, 'tournament_type' => TournamentTypeHelper::CHAMPIONSHIP],
        ['stage' => StageHelper::ROUND_25, 'tournament_type' => TournamentTypeHelper::CHAMPIONSHIP],
        ['stage' => StageHelper::SEMI_FINAL, 'tournament_type' => TournamentTypeHelper::CUP],
        ['stage' => StageHelper::FRIENDLY, 'tournament_type' => TournamentTypeHelper::FRIENDLY],
        ['stage' => StageHelper::ROUND_26, 'tournament_type' => TournamentTypeHelper::CHAMPIONSHIP],
        ['stage' => StageHelper::ROUND_27, 'tournament_type' => TournamentTypeHelper::CHAMPIONSHIP],
        ['stage' => StageHelper::ROUND_28, 'tournament_type' => TournamentTypeHelper::CHAMPIONSHIP],
        ['stage' => StageHelper::ROUND_29, 'tournament_type' => TournamentTypeHelper::CHAMPIONSHIP],
        ['stage' => StageHelper::ROUND_30, 'tournament_type' => TournamentTypeHelper::CHAMPIONSHIP],
        ['stage' => StageHelper::FINAL, 'tournament_type' => TournamentTypeHelper::CUP],
        ['stage' => StageHelper::FRIENDLY, 'tournament_type' => TournamentTypeHelper::FRIENDLY],
    ];

    /**
     * @return void
     */
    public function run(): void
    {
        $seasonId = 1;


        $date = new DateTime();
        $date->setTimezone(new DateTimeZone('UTC'));
        $date->modify('next monday');
        $date->setTime(12, 0);

        foreach ($this->list as $item) {
            Schedule::create([
                'season' => $seasonId,
                'stage' => $item['stage'],
                'time' => $date->getTimestamp(),
                'tournament_type' => $item['tournament_type'],
            ]);

            $date->add(new DateInterval('P1D'));
        }
    }
}
