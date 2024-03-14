<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    const TABLE = 'logs';

    /**
     * @return void
     */
    public function up(): void
    {
        Schema::create(self::TABLE, function (Blueprint $table) {
            $table->id();
            $table->string('channel')->nullable();
            $table->json('context')->nullable();
            $table->float('created_at');
            $table->string('datetime')->nullable();
            $table->json('extra')->nullable();
            $table->text('formatted')->nullable();
            $table->string('level')->nullable();
            $table->text('message')->nullable();
            $table->json('trace')->nullable();
            $table->float('updated_at');
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
