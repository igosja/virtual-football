<?php
declare(strict_types=1);

use App\Database\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    private const TABLE = 'achievements';

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
                    $table->unsignedBigInteger('achievementable_id');
                    $table->string('achievementable_type');
                    $table->foreignId('country_id')->constrained();
                    $this->floatDate('created_at', $table);
                    $table->unsignedTinyInteger('division');
                    $table->unsignedTinyInteger('place');
                    $table->unsignedTinyInteger('season');
                    $table->unsignedTinyInteger('stage');
                    $table->unsignedTinyInteger('tournament_type');
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
