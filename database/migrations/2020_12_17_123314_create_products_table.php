<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->unsignedBigInteger('main_seller_id');
            $table->decimal('price', 10, 2);
            $table->decimal('average_rating', 2, 1);
            $table->unsignedBigInteger('total_reviews');
            $table->unsignedTinyInteger('total_faqs');
            $table->unsignedSmallInteger('department_id')->nullable();
            $table->unsignedSmallInteger('brand_id')->nullable();
            $table->unsignedSmallInteger('stock');
            $table->string('name');
            $table->string('description', 2000);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('main_seller_id')->references('id')->on('users');
            $table->foreign('department_id')->references('id')->on('departments');
            $table->foreign('brand_id')->references('id')->on('brands');
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
