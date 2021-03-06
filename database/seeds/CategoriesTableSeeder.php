<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();
        DB::table('categories')->insert([ 
          [
            'name' => 'HTML'
          ],
          [
            'name' => 'CSS'
          ],
          [
            'name' => 'JavaScript'
          ],
          [
            'name' => 'PHP'
          ],
          [
            'name' => 'SQL'
          ],
          [
            'name' => 'AWS'
          ],
          [
            'name' => 'Linux'
          ],
          [
            'name' => 'その他'
          ]
        ]
      );
    }
}
