<?php
declare(strict_types=1);

use App\Database\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    private const TABLE = 'stadiums';

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
                    $table->unsignedMediumInteger('capacity')->default(1000);
                    $table->foreignId('city_id')->constrained();
                    $this->floatDate('created_at', $table);
                    $table->string('name');
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
