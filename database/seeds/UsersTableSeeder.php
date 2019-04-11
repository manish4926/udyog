<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use TCG\Voyager\Models\Role;
use TCG\Voyager\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'firstname' => Str::random(10),
            'lastname' => Str::random(10),
            'email' => 'test@gmail.com',
            'status' => 1,
            'password' => bcrypt('secret'),
        ]);
    }
}
