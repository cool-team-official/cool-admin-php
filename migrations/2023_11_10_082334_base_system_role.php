<?php

use Hyperf\Database\Schema\Schema;
use Hyperf\Database\Schema\Blueprint;
use Hyperf\Database\Migrations\Migration;

class BaseSystemRole extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('base_system_role', function (Blueprint $table) {
            $table->bigIncrements('id')->unique('unique_index')->comment('ID');
            $table->dateTime('create_time')->comment('创建时间');
            $table->dateTime('update_time')->comment('更新时间');

            $table->bigInteger('user_id')->comment('用户ID');
            $table->string('name')->comment('名称');
            $table->string('label')->comment('角色标签');
            $table->string('remark')->comment('备注');
            $table->integer('relevance')->default(1)->comment('数据权限是否关联上下级');
            $table->json('menu_id_list')->comment('菜单权限');
            $table->json('department_id_list')->comment('部门权限');
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
