<?php

use Hyperf\Database\Schema\Schema;
use Hyperf\Database\Schema\Blueprint;
use Hyperf\Database\Migrations\Migration;

class TaskInfo extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('task_info', function (Blueprint $table) {
            $table->bigIncrements('id')->unique('unique_index')->comment('ID');
            $table->dateTime('create_time')->comment('创建时间');
            $table->dateTime('update_time')->comment('更新时间');

            $table->string('job_id')->comment('任务ID');
            $table->string('repeat_config')->comment('任务配置');
            $table->string('name')->comment('名称');
            $table->string('cron')->comment('cron');
            $table->integer('limit')->comment('最大执行次数 不传为无限次');
            $table->integer('every')->comment('每间隔多少毫秒执行一次 如果cron设置了 这项设置就无效');
            $table->string('remark')->comment('备注');
            $table->tinyInteger('status')->default(1)->comment('状态 0:停止 1：运行');
            $table->dateTime('start_time')->comment('开始时间');
            $table->dateTime('end_time')->comment('结束时间');
            $table->string('data')->comment('数据');
            $table->string('service')->comment('执行的service实例ID');
            $table->tinyInteger('type')->default(0)->comment('状态 0:系统 1：用户');
            $table->dateTime('next_run_time')->comment('下一次执行时间');
            $table->tinyInteger('task_type')->default(0)->comment('状态 0:cron 1：时间间隔');
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
