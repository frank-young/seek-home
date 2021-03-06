<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCarousels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('carousels', function (Blueprint $table) {
        $table->increments('id');
        $table->string('title')->comment('标题');
        $table->string('auth')->nullable()->comment('作者');
        $table->string('img_path')->nullable()->comment('图片路径');
        $table->string('description')->comment('描述');
        $table->text('body')->nullable()->comment('内容');
        $table->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
