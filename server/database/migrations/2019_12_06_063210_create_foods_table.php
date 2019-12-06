<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foods', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->default('')->comment('菜品名字');
            $table->string('introduce')->default('')->comment('菜品介绍');
            $table->integer('score')->default('0')->comment('菜品评分');
            $table->integer('image')->default('0')->comment('菜品图片');
            $table->integer('is_delete')->default('0')->comment('软删除');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foods');
    }
}
