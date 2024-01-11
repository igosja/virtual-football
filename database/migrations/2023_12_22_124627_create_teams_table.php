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
                    $table->foreignId('base_id')->constrained();
                    $table->foreignId('base_medical_id')->constrained();
                    $table->foreignId('base_physical_id')->constrained();
                    $table->foreignId('base_school_id')->constrained();
                    $table->foreignId('base_scout_id')->constrained();
                    $table->foreignId('base_training_id')->constrained();
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
