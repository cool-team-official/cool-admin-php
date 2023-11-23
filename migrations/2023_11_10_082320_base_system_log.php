<?php

use Hyperf\Database\Schema\Schema;
use Hyperf\Database\Schema\Blueprint;
use Hyperf\Database\Migrations\Migration;

class BaseSystemLog extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('base_system_log', function (Blueprint $table) {
            $table->bigIncrements('id')->unique('unique_index')->comment('ID');
            $table->dateTime('create_time')->comment('创建时间');
            $table->dateTime('update_time')->comment('更新时间');

            $table->index('create_time','create_time');
            $table->index('update_time','update_time');
            $table->index('user_id','user_id');
            $table->index('action','action');
            $table->index('ip_address','ip_address');

            $table->bigInteger('user_id')->comment('用户ID');
            $table->string('ip_address')->comment('IP地址');
            $table->json('params')->comment('参数');
            $table->string('ip')->comment('ip');
            $table->string('action')->comment('行为');
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
