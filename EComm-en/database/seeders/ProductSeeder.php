<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'Samsung M30',
            'price'=>'550',
            'description'=>'A smartphone from samsung with 6gb ram and much more feature',
            'category'=>'mobile',
            'gallery'=>''
        ]);
    }
}
