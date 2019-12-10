<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->default('')->comment('文件原名');
            $table->string('savename')->default('')->comment('保存名称');
            $table->string('savepath')->default('')->comment('保存路径');
            $table->string('ext')->default('')->comment('扩展名');
            $table->string('size')->default()->comment('文件大小');
            $table->integer('is_delete')->default(0)->comment('软删除');
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
        Schema::dropIfExists('files');
    }
}
