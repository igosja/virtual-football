<?php
declare(strict_types=1);

use App\Database\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    private const TABLE = 'country_surname';

    /**
     * @return void
     */
    public function up(): void
    {
        if (false === Schema::hasTable(self::TABLE)) {
            Schema::create(
                self::TABLE,
                function (Blueprint $table) {
                    $table->foreignId('country_id')->constrained();
                    $this->floatDate('created_at', $table);
                    $table->unsignedMediumInteger('popularity')->default(0);
                    $table->foreignId('surname_id')->constrained();
                    $this->floatDate('updated_at', $table);

                    $table->unique(['country_id', 'surname_id']);
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
