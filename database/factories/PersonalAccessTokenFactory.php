<?php
declare(strict_types=1);

namespace Database\Factories;

use App\Models\PersonalAccessToken;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * Class PersonalAccessTokenFactory
 * @package Database\Factories
 */
class PersonalAccessTokenFactory extends Factory
{
    /**
     * @var string $model
     */
    protected $model = PersonalAccessToken::class;
    /**
     * @return array
     */
    public function definition(): array
    {
        $time = time();

        return [
            'abilities' => '["*"]',
            'created_at' => $time,
            'last_used_at' => $time,
            'name' => 'token',
            'token' => 'testToken',
            'tokenable_type' => 'App\Models\User',
            'tokenable_id' => 1,
            'updated_at' => $time,
        ];
    }
}
