<?php
declare(strict_types=1);

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

/**
 * Class UserSeeder
 * @package Database\Seeders
 */
class UserSeeder extends AbstractSeeder
{
    /**
     * @return void
     */
    public function run(): void
    {
        $user = new User();
        $user->email = env('ADMIN_EMAIL');
        $user->login = env('ADMIN_LOGIN');
        $user->password = Hash::make(env('ADMIN_PASSWORD'));
        $user->save();
    }
}
