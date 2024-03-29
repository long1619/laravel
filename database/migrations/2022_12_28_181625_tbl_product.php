<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('tbl_product', function (Blueprint $table) {
            $table->Increments('product_id');
            $table->integer('category_id');
            $table->string('product_name');
            $table->string('product_quantity');
            $table->integer('brand_id');
            $table->text('product_desc');
            $table->text('product_content');
            $table->string('product_price'); // giá
            $table->string('product_image');
            $table->integer('product_status'); // mã

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
        Schema::dropIfExists('tbl_product');
    }
}
