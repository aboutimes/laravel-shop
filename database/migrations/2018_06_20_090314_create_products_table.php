<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');    // 名称
            $table->text('description');    // 详情
            $table->string('image');    // 封面图片
            $table->boolean('on_sale')->default(true);  // 是否在售
            $table->float('rating')->default(5);    // 商品平均评分
            $table->unsignedInteger('sold_count')->default(0);  //销量
            $table->unsignedInteger('review_count')->default(0);    //评价数量
            $table->decimal('price', 10, 2);    // （整数位 + 小数位），sku 最低价格，方便用户搜索、排序
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
        Schema::dropIfExists('products');
    }
}
