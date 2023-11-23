<?php

use Hyperf\Database\Schema\Schema;
use Hyperf\Database\Schema\Blueprint;
use Hyperf\Database\Migrations\Migration;

class BaseSystemParam extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('base_system_param', function (Blueprint $table) {
            $table->bigIncrements('id')->unique('unique_index')->comment('ID');
            $table->dateTime('create_time')->comment('创建时间');
            $table->dateTime('update_time')->comment('更新时间');

            $table->index('create_time','create_time');
            $table->index('update_time','update_time');

            $table->string('key_name')->comment('键');
            $table->string('name')->comment('名称');
            $table->text('data')->comment('数据');
            $table->tinyInteger('data_type')->default(0)->comment('数据类型 0-字符串 1-富文本 2-文件');
            $table->string('remark')->comment('备注');

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
