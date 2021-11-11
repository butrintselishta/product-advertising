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
            $table->string('sq_title',500)->index();
            $table->string('en_title',500)->index();
            $table->string('slug',510);
            $table->float('price',8,2);
            $table->float('new_price',8,2)->nullable();
            $table->string('sq_color', 100)->nullable();
            $table->string('en_color', 100)->nullable();
            $table->string('sq_description', 3000);
            $table->string('en_description', 3000);
            $table->bigInteger('menu_id');
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
