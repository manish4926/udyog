<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert(
        	[
            'name' => 'Admin',
            'description' => '',
        	],
        	[
            'name' => 'Moderator',
            'description' => '',
        	],
        	[
            'name' => 'General User',
            'description' => '',
        	],
        	[
            'name' => 'Employee',
            'description' => '',
        	]
    	);
    }
}
