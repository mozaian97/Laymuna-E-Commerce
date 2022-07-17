<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB ;
use Illuminate\Support\Facades\Hash ;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('subcategory')->insert([
              [ 'Subcategory_ID'=>1,
                'name'=>'Pants'
              ],
              [ 'Subcategory_ID'=>2,
                'name'=>'Jackets'
              ],
              [  'Subcategory_ID'=>3,
                'name'=>'Sweaters'
              ],
              [  'Subcategory_ID'=>4,
                'name'=>'Shoes'
              ],
              [  'Subcategory_ID'=>5,
                'name'=>'Bags'
              ],
              [  'Subcategory_ID'=>6,
                'name'=>'Accessories'
              ]

      ]);
    }
}
/*Subcategory_ID	Subcategory_Name
1	Pants
2	Jackets
3	Sweaters
4	Shoes
5	Bags
6	Accessories
7	Pants
8	Jackets
9	Sweaters
10	Shoes
11	Bags
12	Accessories
13	Pants
14	Jackets
15	Sweaters
16	Shoes
17	Bags
18	Accessories
*/
