<?php
declare(strict_types=1);

use Database\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * @return void
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->floatDate('created_at');
            $table->string('email')->unique();
            $table->floatDate('email_verified_at')->nullable();
            $table->string('name');
            $table->string('password');
            $table->rememberToken();
            $table->floatDate('updated_at');
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
