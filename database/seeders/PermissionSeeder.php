<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superAdminRole = Role::create(['name' => 'Super-Admin']);
        $managerRole = Role::create(['name' => 'Manager']);
        $employeeRole = Role::create(['name' => 'Employee']);

        $superAdmin = User::factory()->create([
            'name' => 'superadmin',
            'email' => 'superadmin@gmail.com',
            'password' => bcrypt('password')
        ]);

        $manager = User::factory()->create([
            'name' => 'manager',
            'email' => 'manager@gmail.com',
            'password' => bcrypt('password')
        ]);

        $employee = User::factory()->create([
            'name' => 'employee',
            'email' => 'employee@gmail.com',
            'password' => bcrypt('password')
        ]);

        $superAdmin->assignRole($superAdminRole);
        $manager->assignRole($managerRole);
        $employee->assignRole($employeeRole);

        Permission::create(['name' => 'list programs']);
        Permission::create(['name' => 'create programs']);
        Permission::create(['name' => 'show programs']);
        Permission::create(['name' => 'update programs']);
        Permission::create(['name' => 'delete programs']);
        Permission::create(['name' => 'restore programs']);
        Permission::create(['name' => 'shown own programs']);
        Permission::create(['name' => 'update own programs']);
        Permission::create(['name' => 'delete own programs']);
        Permission::create(['name' => 'restore own programs']);
        
        $manager->givePermissionTo([
            'list programs', 'create programs', 'show programs', 'update programs', 'delete programs', 'restore programs'
        ]);

        $employee->givePermissionTo([
            'list programs', 'create programs', 'shown own programs', 'update own programs', 'delete own programs', 'restore own programs'
        ]);
    }
}