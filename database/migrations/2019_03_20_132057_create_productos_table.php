<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codproducto')->nullable();
            $table->string('producto');
            $table->text('descripcion');

            $table->text('foto')->nullable();

            $table->float('costo')->nullable();
            $table->float('utilidades')->nullable();
            $table->float('precio');

            $table->integer('stock');
            $table->integer('stockminimo');

            $table->unsignedInteger('marca_id');
            $table->unsignedInteger('categoria_id');
            $table->foreign('marca_id')->references('id')->on('marcas');
            $table->foreign('categoria_id')->references('id')->on('categorias');

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
        Schema::dropIfExists('productos');
    }
}
