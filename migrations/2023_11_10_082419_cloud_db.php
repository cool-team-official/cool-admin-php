<?php

use Hyperf\Database\Schema\Schema;
use Hyperf\Database\Schema\Blueprint;
use Hyperf\Database\Migrations\Migration;

class CloudDb extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cloud_db', function (Blueprint $table) {
            $table->bigIncrements('id')->unique('unique_index')->comment('ID');
            $table->dateTime('create_time')->comment('创建时间');
            $table->dateTime('update_time')->comment('更新时间');

            $table->string('name')->comment('名称');
            $table->string('readme')->comment('说明');
            $table->text('content')->comment('内容');
            $table->string('class_name')->comment('类名');
            $table->string('table_name')->comment('表名');
            $table->tinyInteger('status')->default(1)->comment('状态 0-禁用 1-启用');
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
