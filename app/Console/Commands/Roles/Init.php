<?php

namespace App\Console\Commands\Roles;

use App\Models\User;
use Illuminate\Console\Command;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

/**
 * Class Update
 * @package App\Console\Commands\Lunch
 */
class Init extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'roles:init';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Set first user as admin';

    /**
     * @return void
     */
    public function handle(): void
    {
        if (Role::findByName('admin')) {
            $this->info('admin role already exists');
            return;
        }

        $role = Role::create(['name' => 'admin']);
        $this->info('admin role created successfully');

        $permission = Permission::create(['name' => 'see_admin_chapter']);
        $this->info('see_admin_chapter permission created successfully');

        $role->givePermissionTo($permission);
        $this->info('admin role got see_admin_chapter permission successfully');

        $user = User::findOrFail(1);
        $user->assignRole('admin');
        $this->info('user #1 got admin role successfully');

        $this->info('done');
    }
}
