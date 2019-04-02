<?php

use Illuminate\Database\Seeder;
<<<<<<< HEAD
=======
use Illuminate\Support\Str;
use TCG\Voyager\Models\Role;
use TCG\Voyager\Models\User;
>>>>>>> d2692a5e98b7dfc23494d27ca3b0d654eb1091c0

class UsersTableSeeder extends Seeder
{
    /**
<<<<<<< HEAD
=======
     * Auto generated seed file.
>>>>>>> d2692a5e98b7dfc23494d27ca3b0d654eb1091c0
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
=======
        if (User::count() == 0) {
            $role = Role::where('name', 'admin')->firstOrFail();

            User::create([
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => bcrypt('password'),
                'remember_token' => Str::random(60),
                'role_id'        => $role->id,
            ]);
        }

>>>>>>> d2692a5e98b7dfc23494d27ca3b0d654eb1091c0
        DB::table('users')->insert([
            'firstname' => Str::random(10),
            'lastname' => Str::random(10),
            'email' => 'test@gmail.com',
            'status' => 1,
            'password' => bcrypt('secret'),
        ]);
    }
}
