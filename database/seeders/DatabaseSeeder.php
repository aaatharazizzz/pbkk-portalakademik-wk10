<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleAndPermissionSeeder::class
        ]);
        // User::factory(10)->create();
        $admin = User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@its.ac.id',
        ]);
        $admin->assignRole('admin');
        $admin = User::factory()->create([
            'name' => 'Staff',
            'email' => 'staff@its.ac.id',
        ]);
        $admin->assignRole('staff');
        $mahasiswa = User::factory()->create([
            'name' => 'Athar Bakhtiar Aziz',
            'email' => '5025241136@student.its.ac.id',
        ]);
        Project::factory(2)->create([
            'user_id' => $mahasiswa->id
        ]);
        for($i = 0; $i < 14; $i++) {
            $mahasiswa = User::factory()->create();
            Project::factory(2)->create([
                'user_id' => $mahasiswa->id
            ]);
            $mahasiswa->assignRole('mahasiswa');
        }
        $dosen = User::factory()->create([
            'name' => 'Dosen PBKK',
            'role' => 'dosen',
            'email' => 'dosenpbkk@its.ac.id',
        ]);
        $dosen->assignRole('dosen');
    }
}
