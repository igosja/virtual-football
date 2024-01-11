<?php
declare(strict_types=1);

use App\Database\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    private const TABLE = 'base_schools';

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
                    $table->unsignedTinyInteger('player_count');
                    $table->unsignedTinyInteger('power');
                    $table->unsignedMediumInteger('price_buy');
                    $table->unsignedMediumInteger('price_sell');
                    $table->unsignedTinyInteger('school_speed');
                    $this->floatDate('updated_at', $table);
                    $table->unsignedTinyInteger('with_special');
                    $table->unsignedTinyInteger('with_style');
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
