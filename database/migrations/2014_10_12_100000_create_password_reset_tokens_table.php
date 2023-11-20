<?php
declare(strict_types=1);

use Database\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    private const TABLE = 'password_reset_tokens';

    /**
     * @return void
     */
    public function up(): void
    {
        Schema::create(self::TABLE, function (Blueprint $table) {
            $table->floatDate('created_at');
            $table->string('email')->primary();
            $table->string('token');
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists(self::TABLE);
    }
};
