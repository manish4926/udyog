<?php

use Illuminate\Database\Seeder;

class UserRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_role')->insert(
        	[
            'user_id' => '1',
            'role_id' => '1',
<<<<<<< HEAD
        	],
            
            
=======
        	]
>>>>>>> d2692a5e98b7dfc23494d27ca3b0d654eb1091c0
    	);
    }
}
