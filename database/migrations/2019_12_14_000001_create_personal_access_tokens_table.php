<?php
declare(strict_types=1);

use Database\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    private const TABLE = 'personal_access_tokens';

    /**
     * @return void
     */
    public function up(): void
    {
        Schema::create(
            self::TABLE,
            function (Blueprint $table) {
                $table->id();
                $table->text('abilities')->nullable();
                $table->floatDate('created_at');
                $table->floatDate('expires_at')->nullable();
                $table->floatDate('last_used_at')->nullable();
                $table->string('name');
                $table->string('token', 64)->unique();
                $table->morphs('tokenable');
                $table->floatDate('updated_at');
            }
        );
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists(self::TABLE);
    }
};
