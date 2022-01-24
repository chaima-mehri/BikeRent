<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     DB::table('bike')->insert([
        'name'=>'bla bla',
        'price'=>45,
        'model'=>'medel1',
        'total'=>145,
        'description'=>'this is a test'
        
     ]);
    }
}
