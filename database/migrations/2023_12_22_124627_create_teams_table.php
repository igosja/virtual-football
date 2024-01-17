<?php
declare(strict_types=1);

use App\Database\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    private const TABLE = 'teams';

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
                    $table->unsignedTinyInteger('base_level')->default(0);
                    $table->unsignedTinyInteger('base_medical_level')->default(0);
                    $table->unsignedTinyInteger('base_physical_level')->default(0);
                    $table->unsignedTinyInteger('base_school_level')->default(0);
                    $table->unsignedTinyInteger('base_scout_level')->default(0);
                    $table->unsignedTinyInteger('base_training_level')->default(0);
                    $this->floatDate('created_at', $table);
                    $table->string('name');
                    $table->foreignId('stadium_id')->unique()->constrained('stadiums');
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
