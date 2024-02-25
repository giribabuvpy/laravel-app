<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserExpenseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user_expenses')->insert([ 
            [ 'user_id'=>'1','item_id'=>'1','amount'=>'10000.00' ], 
            [ 'user_id'=>'2','item_id'=>'1','amount'=>'5000.00' ],
            [ 'user_id'=>'2','item_id'=>'2','amount'=>'5000.00' ], 
        ]);
    }
}
