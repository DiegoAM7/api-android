<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'names' => 'Hardik',
            'lastnames' => 'Savani',
            'rut' => '12.345.678-9',
            'birthday' => '1990-01-01',
            'gender' => 'Masculino',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456')
        ]);
        $user->assignRole('admin');
        $permissions = Permission::pluck('id','id')->all();
        $user->syncPermissions($permissions);
    }
}
