<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBasicTable extends Migration
{
    /**
     * Run the migrations.  运行迁移
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('basics')) {
            Schema::create('basics', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name'); //配置名
                $table->string('value');//配置值
                $table->string('desc'); //中文解释
                $table->string('tag');  //标签
                $table->timestamps();
            });
        }

    }

    /**
     * Reverse the migrations. 撤销迁移
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('basics');
    }
}
