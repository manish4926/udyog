<?php

use Illuminate\Database\Seeder;

class cdetailtableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cdetails')->insert([
            'ccode' => '101',
            'cname' => 'SHARMA AUTO',
            'slug' => 'sharma-auto',
            'cemp' => 'Sant Kumar Sharma',
            'material' => 'Motor Brake Shous',
            'block' => 'A-2',
            'sector' => 'Sector-1',
            'area' => 'Bawana',
            'state' => 'Delhi',
            'phoneno' => '9312835122',
            'email' => '12345@gmail.com',
            'industrytype' => 'automobiles',
            'businesstype' => 'manufacturer',
            'image' => 'C:\xampp\htdocs\BCI\public\microweb\images\team\3.jpg',
        ]);

        DB::table('cdetails')->insert([
            'ccode' => '102',
            'cname' => 'Hindustan Brooms',
            'slug' => 'hindustan-brooms',
            'cemp' => 'Hindustan Brooms',
            'material' => 'Brooms',
            'block' => 'A-3',
            'sector' => 'Sector-3',
            'area' => 'Bawana',
            'state' => 'Delhi',
            'phoneno' => '9312822122',
            'email' => '12345@gmail.com',
            'industrytype' => 'houseware',
            'businesstype' => 'manufacturer',
            'image' => 'C:\xampp\htdocs\BCI\public\microweb\images\team\3.jpg',
        ]);
        DB::table('cdetails')->insert([
            'ccode' => '103',
            'cname' => 'FORTUNE ENTERPRISES',
            'slug' => 'fortune-enterprises',
            'cemp' => 'Aman Aggarwal',
            'material' => 'Safity Shoes',
            'block' => 'A-5',
            'sector' => 'Sector-3',
            'area' => 'Bawana',
            'state' => 'Delhi',
            'phoneno' => '9212822122',
            'email' => '12345@gmail.com',
            'industrytype' => 'fashion accesories',
            'businesstype' => 'manufacturer',
            'image' => 'C:\xampp\htdocs\BCI\public\microweb\images\team\3.jpg',
        ]);
        
        DB::table('cdetails')->insert([
            'ccode' => '104',
            'cname' => 'SANJAY SUCHDEVA LURINDA MUL SONS',
            'slug' => 'sanjay-lurinda',
            'cemp' => 'Sanjay',
            'material' => 'Safity Shoes',
            'block' => 'A-8',
            'sector' => 'Sector-1',
            'area' => 'Bawana',
            'state' => 'Delhi',
            'phoneno' => '9212843222',
            'email' => '12345@gmail.com',
            'industrytype' => 'food and beverages',
            'businesstype' => 'retailer',
            'image' => 'C:\xampp\htdocs\BCI\public\microweb\images\team\3.jpg',
        ]);

    }
}
