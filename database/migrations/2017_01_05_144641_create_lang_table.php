<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('langs')) {
            Schema::create('langs', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name')->unique();;
                $table->string('en');
                $table->string('zh_CN');
                $table->timestamps();
            });
        }

    }

    /**
     * 撤销迁移
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lang');
    }
}
