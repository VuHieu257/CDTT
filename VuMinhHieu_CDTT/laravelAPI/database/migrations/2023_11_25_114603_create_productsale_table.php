<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('db_productsale', function (Blueprint $table) {
            $table->id();
            $table->string('product_id');
            $table->string('quantity_sold');
            $table->string('price_sales');
            $table->date('sale_date_start');
            $table->date('sale_date_end');
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
        Schema::dropIfExists('db_productsale');
    }
};
