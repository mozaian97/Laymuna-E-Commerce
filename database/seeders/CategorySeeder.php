<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB ;
use Illuminate\Support\Facades\Hash ;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('category')->insert([
              [ 'Category_ID'=>1,
                'name'=>'Men'
              ],
              [  'Category_ID'=>2,
                'name'=>'Women'
              ],
              [ 'Category_ID'=>3,
                'name'=>'Kids'
              ]
      ]);
    }
}
