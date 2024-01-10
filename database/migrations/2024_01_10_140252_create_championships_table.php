<?php
declare(strict_types=1);

use App\Database\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    private const TABLE = 'schedules';

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
                    $table->foreignId('country_id')->constrained();
                    $this->floatDate('created_at', $table);
                    $table->tinyInteger('difference');
                    $table->unsignedTinyInteger('division')->default(1);
                    $table->unsignedTinyInteger('drawn')->default(0);
                    $table->unsignedTinyInteger('game')->default(0);
                    $table->unsignedTinyInteger('loss')->default(0);
                    $table->unsignedTinyInteger('miss')->default(0);
                    $table->unsignedTinyInteger('place')->default(0);
                    $table->unsignedTinyInteger('point')->default(0);
                    $table->unsignedTinyInteger('season')->default(0);
                    $table->unsignedTinyInteger('score')->default(0);
                    $table->foreignId('team_id')->constrained();
                    $this->floatDate('updated_at', $table);
                    $table->unsignedTinyInteger('win')->default(0);
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
