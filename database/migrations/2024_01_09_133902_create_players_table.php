<?php
declare(strict_types=1);

use App\Database\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    private const TABLE = 'players';

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
                    $table->unsignedTinyInteger('age')->default(18);
                    $table->foreignId('country_id')->constrained();
                    $this->floatDate('created_at', $table);
                    $table->unsignedTinyInteger('fatigue');
                    $table->foreignId('name_id')->constrained();
                    $table->unsignedTinyInteger('power');
                    $table->foreignId('surname_id')->constrained();
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
