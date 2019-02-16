<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <=12 ; $i++) { 
        	DB::table('products')->insert([
        		'name'  =>  str_random(5),
        		'image' =>  'https://hc.com.vn',
        		'qty'   => $i,
        		'money' => 1000,
        		'created_at' => date('Y-m-d H:i:s'),
        		'updated_at'  => null
        	]);
        }
    }
}
