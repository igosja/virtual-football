<?php
declare(strict_types=1);

use App\Database\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    private const TABLE = 'bases';

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
                    $table->unsignedMediumInteger('maintenance_base');
                    $table->unsignedMediumInteger('maintenance_slot');
                    $table->unsignedMediumInteger('price_buy');
                    $table->unsignedMediumInteger('price_sell');
                    $table->unsignedTinyInteger('slot_max');
                    $table->unsignedTinyInteger('slot_min');
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
