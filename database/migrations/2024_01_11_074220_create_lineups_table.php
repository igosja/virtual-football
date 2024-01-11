<?php
declare(strict_types=1);

use App\Database\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    private const TABLE = 'lineups';

    /**
     * @return void
     */
    public function up(): void
    {
        if (false === Schema::hasTable(self::TABLE)) {
            Schema::create(
                self::TABLE,
                function (Blueprint $table) {
                    $table->id();
                    $this->floatDate('created_at', $table);
                    $table->foreignId('game_id')->constrained();
                    $table->foreignId('player_id')->constrained();
                    $table->foreignId('team_id')->constrained();
                    $this->floatDate('updated_at', $table);
                }
            );
        }
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists(self::TABLE);
    }
};
