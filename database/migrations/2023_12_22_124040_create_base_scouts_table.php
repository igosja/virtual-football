<?php
declare(strict_types=1);

use App\Database\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    private const TABLE = 'base_scouts';

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
                    $table->unsignedTinyInteger('build_speed');
                    $this->floatDate('created_at', $table);
                    $table->unsignedTinyInteger('distance');
                    $table->boolean('is_market_fatigue');
                    $table->boolean('is_market_game_row');
                    $table->boolean('is_market_physical');
                    $table->boolean('is_opponent_fatigue');
                    $table->boolean('is_opponent_game_row');
                    $table->boolean('is_opponent_physical');
                    $table->unsignedTinyInteger('level');
                    $table->unsignedTinyInteger('min_base_level');
                    $table->unsignedTinyInteger('my_style_count');
                    $table->unsignedMediumInteger('my_style_price');
                    $table->unsignedMediumInteger('price_buy');
                    $table->unsignedMediumInteger('price_sell');
                    $table->unsignedTinyInteger('scout_speed_max');
                    $table->unsignedTinyInteger('scout_speed_min');
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
