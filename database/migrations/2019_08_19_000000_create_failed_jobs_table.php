<?php
declare(strict_types=1);

use Database\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    private const TABLE = 'failed_jobs';

    /**
     * @return void
     */
    public function up(): void
    {
        Schema::create(
            self::TABLE,
            function (Blueprint $table) {
                $table->id();
                $table->text('connection');
                $table->longText('exception');
                $table->floatDate('failed_at');
                $table->longText('payload');
                $table->text('queue');
                $table->string('uuid')->unique();
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
