<?php

declare(strict_types=1);
/**
 * This file is part of CoolAdmin.
 */
use Hyperf\Database\Migrations\Migration;
use Hyperf\Database\Schema\Blueprint;
use Hyperf\Database\Schema\Schema;

class BaseSystemMenu extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('base_system_menu', function (Blueprint $table) {
            $table->bigIncrements('id')->unique('unique_index')->comment('ID');
            $table->dateTime('create_time')->comment('创建时间');
            $table->dateTime('update_time')->comment('更新时间');

            $table->index('create_time', 'create_time');
            $table->index('update_time', 'update_time');

            $table->bigInteger('parent_id')->comment('父菜单ID');
            $table->string('name')->comment('菜单名称');
            $table->string('router')->comment('菜单地址');
            $table->string('perms')->comment('权限标识');
            $table->tinyInteger('type')->default(0)->comment('类型 0-目录 1-菜单 2-按钮');
            $table->string('icon')->comment('图标');
            $table->integer('order_number')->default(0)->comment('排序');
            $table->string('view_path')->comment('视图地址');
            $table->tinyInteger('keep_alive')->comment('路由缓存');
            $table->tinyInteger('is_show')->comment('是否显示');
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
