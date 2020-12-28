<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LineasPedido extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //RELACIONA PEDIDOS CON PRODUCTOS
        Schema::create('lineas_pedido', function (Blueprint $table) {

            $table->id();
            $table->string('pedido_id');
            $table->integer('product_id');
            $table->integer('qty');
            $table->decimal('totalPrice',10,2);
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('pedido_id')->references('id')->on('pedidos');
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
