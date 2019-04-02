<?php

use Illuminate\Database\Seeder;
<<<<<<< HEAD
=======
use TCG\Voyager\Models\Role;
>>>>>>> d2692a5e98b7dfc23494d27ca3b0d654eb1091c0

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
<<<<<<< HEAD
        	]);
             DB::table('roles')->insert(
            [
            'name' => 'Moderator',
            'description' => '',
            ]);
    
        	 DB::table('roles')->insert(
            
            [
            'name' => 'General User',
            'description' => '',
        	]);
        	 DB::table('roles')->insert(
            [

            'name' => 'Employee',
            'description' => '',
        	]);
    
    }                                                                                                                                                                                                                                                                           
=======
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
>>>>>>> d2692a5e98b7dfc23494d27ca3b0d654eb1091c0
}
