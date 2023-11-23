<?php

use Hyperf\Database\Schema\Schema;
use Hyperf\Database\Schema\Blueprint;
use Hyperf\Database\Migrations\Migration;

class RecycleData extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('recycle_data', function (Blueprint $table) {
            $table->bigIncrements('id')->unique('unique_index')->comment('ID');
            $table->dateTime('create_time')->comment('创建时间');
            $table->dateTime('update_time')->comment('更新时间');

            $table->json('entity_info')->comment('表');
            $table->bigInteger('user_id')->comment('操作人ID');
            $table->json('data')->comment('被删除的数据');
            $table->string('url')->comment('请求的接口');
            $table->json('param')->comment('请求参数');
            $table->integer('count')->comment('删除数据条数');
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
