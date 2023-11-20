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
        if (false === Schema::connection(config('logtodb.connection'))->hasTable(config('logtodb.collection'))) {
            Schema::connection(config('logtodb.connection'))->create(
                config('logtodb.collection'),
                function (Blueprint $table) {
                    $table->increments('id');
                    $table->string('channel')->nullable();
                    $table->longText('context')->nullable();
                    $table->floatDate('created_at');
                    $table->string('datetime')->nullable();
                    $table->text('extra')->nullable();
                    $table->integer('level')->default(0);
                    $table->string('level_name', 20);
                    $table->text('message')->nullable();
                    $table->integer('unix_time');
                    $table->floatDate('updated_at');
                }
            );
        }
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::connection(config('logtodb.connection'))->dropIfExists(config('logtodb.collection'));
    }
};
