<?php
declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
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
                $table->unsignedFloat('created_at', 17, 6);
                $table->unsignedFloat('expires_at', 17, 6)->nullable();
                $table->unsignedFloat('last_used_at', 17, 6)->nullable();
                $table->string('name');
                $table->string('token', 64)->unique();
                $table->morphs('tokenable');
                $table->unsignedFloat('updated_at', 17, 6);
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
