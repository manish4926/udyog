<?php

use Illuminate\Database\Seeder;

class companyverifyseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companyverify')->insert([
            'ccode' => 101,
            'cname' => 'HINDUSTAN BROOMS',
            
        ]);
        DB::table('companyverify')->insert([
            'ccode' => 102,
            'cname' => 'FORTUNE ENTERPRISES',
            
        ]);
        DB::table('companyverify')->insert([
            'ccode' => 103,
            'cname' => 'JAI BHAWANI INDS',
        ]);
    }
}
