<?php
declare(strict_types=1);

namespace Database\Seeders;

use App\Models\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

/**
 * Class RoleSeeder
 * @package Database\Seeders
 */
class RoleSeeder extends AbstractSeeder
{
    /**
     * @return void
     */
    public function run(): void
    {
        $permission = Permission::create(['name' => 'see_admin_chapter']);

        $role = Role::create(['name' => 'admin']);
        $role->givePermissionTo($permission);

        $user = User::findOrFail(1);
        $user->assignRole('admin');
    }
}
