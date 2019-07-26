<?php

use Illuminate\Database\Seeder;

class companydetailsseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companydetails')->insert([
            'userid' => 3,
            'companycode' => 101,
            
        ]);
        DB::table('companydetails')->insert([
            'userid' => 4,
            'companycode' => 102,
            
        ]);
    }
}
