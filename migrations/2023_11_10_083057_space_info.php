<?php

use Hyperf\Database\Schema\Schema;
use Hyperf\Database\Schema\Blueprint;
use Hyperf\Database\Migrations\Migration;

class SpaceInfo extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('space_info', function (Blueprint $table) {
            $table->bigIncrements('id')->unique('unique_index')->comment('ID');
            $table->dateTime('create_time')->comment('创建时间');
            $table->dateTime('update_time')->comment('更新时间');

            $table->string('url')->comment('地址');
            $table->string('type')->comment('类型');
            $table->bigInteger('classify_id')->comment('分类ID');
            $table->string('file_id')->comment('文件ID');
            $table->string('name')->comment('文件名');
            $table->integer('size')->comment('文件大小');
            $table->integer('version')->default(1)->comment('文件版本');

            $table->string('key')->comment('文件位置');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('', function (Blueprint $table) {
            //
        });
    }
}
