<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::findOrCreate('admin');
        $dosenRole = Role::findOrCreate('staff');
        $dosenRole = Role::findOrCreate('dosen');
        $mahasiswaRole = Role::findOrCreate('mahasiswa');
        $allPermissions = Permission::all();
        $adminRole->syncPermissions($allPermissions);
    }
}
