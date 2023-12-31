<?php

declare(strict_types=1);
/**
 * This file is part of CoolAdmin.
 */
use Hyperf\Database\Migrations\Migration;
use Hyperf\Database\Schema\Blueprint;
use Hyperf\Database\Schema\Schema;

class UserWechat extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_wechat', function (Blueprint $table) {
            $table->bigIncrements('id')->unique('unique_index')->comment('ID');
            $table->dateTime('create_time')->comment('创建时间');
            $table->dateTime('update_time')->comment('更新时间');

            $table->string('union_id')->comment('微信unionId');
            $table->string('openid')->comment('微信openid');
            $table->string('avatar_url')->comment('头像');
            $table->string('nick_name')->comment('昵称');
            $table->integer('gender')->default(0)->comment('性别 0-未知 1-男 2-女');
            $table->string('language')->comment('语音');
            $table->string('city')->comment('城市');
            $table->string('province')->comment('省份');
            $table->string('country')->comment('国际');

            $table->tinyInteger('type')->default(0)->comment('类型 0-小程序 1-公众号 2-H5 3-APP');
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
