<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([ 
            [ 'category_name'=>'Daily expenses'], 
            [ 'category_name'=>'Fixed expenses'], 
            [ 'category_name'=>'Variable expenses'],   
        ]);
    }
}
