<?php

declare(strict_types=1);
/**
 * This file is part of CoolAdmin.
 */
use Hyperf\Database\Migrations\Migration;
use Hyperf\Database\Schema\Blueprint;
use Hyperf\Database\Schema\Schema;

class BaseSystemUser extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('base_system_user', function (Blueprint $table) {
            $table->bigIncrements('id')->unique('unique_index')->comment('ID');
            $table->dateTime('create_time')->comment('创建时间');
            $table->dateTime('update_time')->comment('更新时间');

            $table->bigInteger('department_id')->comment('部门ID');
            $table->string('name')->comment('姓名');
            $table->string('username')->comment('用户名');
            $table->string('password')->comment('密码');
            $table->tinyInteger('password_version')->default(1)->comment('密码版本, 作用是改完密码，让原来的token失效');
            $table->string('nick_name')->comment('昵称');
            $table->string('head_image')->comment('头像');
            $table->string('phone')->comment('手机号');
            $table->string('email')->comment('邮箱地址');
            $table->tinyInteger('status')->default('1')->comment('状态 0:禁用 1：启用');
            $table->string('remark')->comment('备注');
            $table->string('socket_id')->comment('SocketId');
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
