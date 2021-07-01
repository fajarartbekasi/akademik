<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Wala;
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
        $admin = User::factory()->create([
            'name'     => 'John Doe',
            'email'    => 'admin@laravelakademik.com',
            'email_verified_at' => now(),
            'password' => bcrypt('laravel'),
        ]);

        $admin->assignRole('admin');

        $this->command->info('>_ Here is your admin details to login:');
        $this->command->warn($admin->email);
        $this->command->warn('Password is "laravel"');

        // Teacher
        $teacher = User::factory()->create([
            'name'     => 'Tailler Otwell',
            'email'    => 'guru@laravelakademik.com',
            'email_verified_at' => now(),
            'password' => bcrypt('laravel'),
        ]);
        if($teacher->save()){

            $guruprofile = Teacher::create([
                'user_id'   => $teacher->id,
            ]);
        }
        $teacher->assignRole('guru');

        $this->command->info('>_ Here is your guru details to login:');
        $this->command->warn($teacher->email);
        $this->command->warn('Password is "laravel"');

        // Walas
        $walas = User::factory()->create([
            'name'     => 'Adam Wathan',
            'email'    => 'walas@laravelakademik.com',
            'email_verified_at' => now(),
            'password' => bcrypt('laravel'),
        ]);

        if($walas->save()){
            $teacher = Teacher::create([
                'user_id'   => $walas->id,
            ]);
            if ($teacher->save()) {
                    $walasprofile = Wala::create([
                    'user_id'   => $teacher->user_id,
                    'teacher_id'   => $teacher->id,
                ]);
            }
        }

        $walas->assignRole('walas');

        $this->command->info('>_ Here is your walas details to login:');
        $this->command->warn($walas->email);
        $this->command->warn('Password is "laravel"');

        // Siswa
        $student = User::factory()->create([
            'name'     => 'Jefryway',
            'email'    => 'siswa@laravelakademik.com',
            'email_verified_at' => now(),
            'password' => bcrypt('laravel'),
        ]);

        if($student->save()){
            $students = Student::create([
                'user_id' => $student->id,
            ]);
        }

        $student->assignRole('siswa');

        $this->command->info('>_ Here is your siswa details to login:');
        $this->command->warn($student->email);
        $this->command->warn('Password is "laravel"');

        $this->command->call('cache:clear');
    }
}
