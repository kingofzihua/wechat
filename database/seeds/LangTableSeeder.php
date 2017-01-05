<?php

use Illuminate\Database\Seeder;

class LangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('langs')->insert([
            'name' => 'test',
            'en' => 'test',
            'zh_CN' => '测试',
        ]);
    }
}
