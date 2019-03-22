<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePresupuestoProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presupuesto_producto', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('presupuesto_id');
            $table->unsignedInteger('producto_id');

            $table->integer('cantidad');
            $table->float('descuento');
            $table->float('preciounitario');
            $table->float('subtotal');


            $table->foreign('presupuesto_id')->references('id')->on('presupuestos');
            $table->foreign('producto_id')->references('id')->on('productos');
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
        Schema::dropIfExists('presupuesto_producto');
    }
}
