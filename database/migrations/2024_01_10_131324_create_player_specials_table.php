<?php
declare(strict_types=1);

use App\Database\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    private const TABLE = 'player_specials';

    /**
     * @return void
     */
    public function up(): void
    {
        if (false === Schema::hasTable(self::TABLE)) {
            Schema::create(
                self::TABLE,
                function (Blueprint $table) {
                    $this->floatDate('created_at', $table);
                    $table->unsignedTinyInteger('level')->default(1);
                    $table->foreignId('player_id')->constrained();
                    $table->unsignedTinyInteger('special');
                    $this->floatDate('updated_at', $table);

                    $table->unique(['player_id', 'special']);
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
