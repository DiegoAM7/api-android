<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create(['name' => 'admin']);
        $role2 = Role::create(['name' => 'vendedor']);
        $role3 = Role::create(['name' => 'cliente']);

        $permissions = Permission::pluck('id','id')->all();

        $role->syncPermissions($permissions);
        $role2->syncPermissions($permissions);
        $role3->syncPermissions($permissions);
    }
}
