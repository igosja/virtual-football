<?php
declare(strict_types=1);

use App\Database\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    private const TABLE = 'base_medicals';

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
                    $table->unsignedTinyInteger('fatigue');
                    $table->unsignedTinyInteger('level');
                    $table->unsignedTinyInteger('min_base_level');
                    $table->unsignedMediumInteger('price_buy');
                    $table->unsignedMediumInteger('price_sell');
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
