<?php

declare(strict_types=1);
/**
 * This file is part of CoolAdmin.
 */
use Hyperf\Database\Migrations\Migration;
use Hyperf\Database\Schema\Blueprint;
use Hyperf\Database\Schema\Schema;

class CloudFunctionLog extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cloud_function_log', function (Blueprint $table) {
            $table->bigIncrements('id')->unique('unique_index')->comment('ID');
            $table->dateTime('create_time')->comment('创建时间');
            $table->dateTime('update_time')->comment('更新时间');

            $table->integer('info_id')->comment('云函数ID');
            $table->json('request')->comment('请求');
            $table->json('result')->comment('结果');
            $table->tinyInteger('type')->comment('类型 0-失败 1-成功');
            $table->integer('int')->default(0)->comment('耗时(毫秒)');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('', function (Blueprint $table) {
        });
    }
}
