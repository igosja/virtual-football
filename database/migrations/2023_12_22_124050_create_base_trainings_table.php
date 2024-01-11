<?php
declare(strict_types=1);

use App\Database\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    private const TABLE = 'base_trainings';

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
                    $table->unsignedTinyInteger('level');
                    $table->unsignedTinyInteger('min_base_level');
                    $table->unsignedTinyInteger('position_count');
                    $table->unsignedMediumInteger('position_price');
                    $table->unsignedTinyInteger('power_count');
                    $table->unsignedMediumInteger('power_price');
                    $table->unsignedMediumInteger('price_buy');
                    $table->unsignedMediumInteger('price_sell');
                    $table->unsignedTinyInteger('special_count');
                    $table->unsignedMediumInteger('special_price');
                    $table->unsignedTinyInteger('training_speed_max');
                    $table->unsignedMediumInteger('training_speed_min');
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
