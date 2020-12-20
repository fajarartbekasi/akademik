<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UsersTableSeeder extends Seeder
{
    use HasFactory;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // admin
        $ketua = User::factory()->create([
            'name'     => 'Admin',
            'email'    => 'admin@laravelakademik.com',
            'email_verified_at' => now(),
            'password' => bcrypt('laravel'),
        ]);

        $ketua->assignRole('admin');

        $this->command->info('>_ Here is your admin details to login:');
        $this->command->warn($ketua->email);
        $this->command->warn('Password is "laravel"');

        // Guru
        $ketua = User::factory()->create([
            'name'     => 'Guru',
            'email'    => 'guru@laravelakademik.com',
            'email_verified_at' => now(),
            'password' => bcrypt('laravel'),
        ]);

        $ketua->assignRole('guru');

        $this->command->info('>_ Here is your guru details to login:');
        $this->command->warn($ketua->email);
        $this->command->warn('Password is "laravel"');

        // Walas
        $ketua = User::factory()->create([
            'name'     => 'Walas',
            'email'    => 'walas@laravelakademik.com',
            'email_verified_at' => now(),
            'password' => bcrypt('laravel'),
        ]);

        $ketua->assignRole('walas');

        $this->command->info('>_ Here is your walas details to login:');
        $this->command->warn($ketua->email);
        $this->command->warn('Password is "laravel"');

        // Siswa
        $ketua = User::factory()->create([
            'name'     => 'Siswa',
            'email'    => 'siswa@laravelakademik.com',
            'email_verified_at' => now(),
            'password' => bcrypt('laravel'),
        ]);

        $ketua->assignRole('siswa');

        $this->command->info('>_ Here is your siswa details to login:');
        $this->command->warn($ketua->email);
        $this->command->warn('Password is "laravel"');

        $this->command->call('cache:clear');
    }
}
