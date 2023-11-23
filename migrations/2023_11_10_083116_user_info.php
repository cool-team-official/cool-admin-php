<?php

use Hyperf\Database\Schema\Schema;
use Hyperf\Database\Schema\Blueprint;
use Hyperf\Database\Migrations\Migration;

class UserInfo extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_info', function (Blueprint $table) {
            $table->bigIncrements('id')->unique('unique_index')->comment('ID');
            $table->dateTime('create_time')->comment('创建时间');
            $table->dateTime('update_time')->comment('更新时间');

            $table->string('union_id')->comment('登录唯一ID');
            $table->string('avatar_url')->comment('头像');
            $table->string('nick_name')->comment('昵称');
            $table->string('phone')->comment('手机号');
            $table->integer('gender')->default(0)->comment('性别 0-未知 1-男 2-女');
            $table->integer('status')->default(1)->comment('状态 0-禁用 1-正常');
            $table->integer('login_type')->default(0)->comment('登录方式 0-小程序 1-公众号 2-H');
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
