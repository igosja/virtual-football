<?php
declare(strict_types=1);

use App\Database\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    private const TABLE = 'personal_access_tokens';

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
                    $table->text('abilities')->nullable();
                    $this->floatDate('created_at', $table);
                    $this->floatDate('expires_at', $table)->nullable();
                    $this->floatDate('last_used_at', $table)->nullable();
                    $table->string('name');
                    $table->string('token', 64)->unique();
                    $table->morphs('tokenable');
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
