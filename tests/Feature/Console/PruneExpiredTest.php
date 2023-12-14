<?php
declare(strict_types=1);

namespace Feature\Console;

use Illuminate\Support\Facades\Config;
use Tests\TestCase;

/**
 * Class PruneExpired
 * @package App\Console\Commands
 */
class PruneExpiredTest extends TestCase
{
    /**
     * @return void
     */
    public function testSuccess(): void
    {
        $this
            ->artisan('sanctum:prune-expired')
            ->expectsOutputToContain('Tokens expired for more than [24 hours] pruned successfully.')
            ->assertExitCode(0);
    }

    /**
     * @return void
     */
    public function testWarning(): void
    {
        Config::set('sanctum.expiration', 0);
        $this
            ->artisan('sanctum:prune-expired')
            ->expectsOutputToContain('Expiration value not specified in configuration file.')
            ->assertExitCode(0);
    }

    /**
     * @return void
     */
    public function testDatabaseRemove()
    {
        $this->assertDatabaseCount('personal_access_tokens', 0);
        $this->artisan('sanctum:prune-expired');
        $this->assertDatabaseCount('personal_access_tokens', 0);
    }
}
