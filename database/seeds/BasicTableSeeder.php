<?php

use Illuminate\Database\Seeder;

class BasicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('basics')->insert(

            array(
                [
                    'name' => 'HOST',
                    'value' => 'http://wechat.student.kingofzihua.top/',
                    'desc' => '网站地址',
                    'tag' => 'host',
                    'created_at' => date('Y-m-d H:i:s', time()),
                    'updated_at' => date('Y-m-d H:i:s', time()),
                ],
                [
                    'name' => 'HOSTNAME',
                    'value' => 'KING',
                    'desc' => '网站名',
                    'tag' => 'host',
                    'created_at' => date('Y-m-d H:i:s', time()),
                    'updated_at' => date('Y-m-d H:i:s', time()),

                ]

            )

        );
    }
}
