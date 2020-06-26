<?php

use Illuminate\Database\Seeder;

class ContentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contents')->insert([  
            'comment' => 'シーダーコメントです',
            'condition' => '作業中/完了',
    ]);
    }
}
