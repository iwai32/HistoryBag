<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('contents')->truncate();
      DB::table('contents')->insert([ 
        [
          'name' => 'daily_reports'
        ],
        [
          'name' => 'snippets'
        ],
        [
          'name' => 'memo'
        ]
      ]);
    }
}
