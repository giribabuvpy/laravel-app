<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExpenseItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('expense_items')->insert([ 
            [ 'category_id'=>'1','item_name'=>'Grocerry expenses','validation'=>'1' ], 
            [ 'category_id'=>'1','item_name'=>'Vegitable expenses','validation'=>'0' ],
            [ 'category_id'=>'1','item_name'=>'Fruit expenses','validation'=>'0' ],
            
            [ 'category_id'=>'2','item_name'=>'School Fees','validation'=>'1' ], 
            [ 'category_id'=>'2','item_name'=>'Internet charges','validation'=>'1' ],
            [ 'category_id'=>'2','item_name'=>'Rent','validation'=>'1' ],
        ]);
    }
}
