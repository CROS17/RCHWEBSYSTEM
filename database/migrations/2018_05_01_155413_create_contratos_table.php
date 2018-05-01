<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContratosTable extends Migration
{
    /**
     * Run the migrations.
     *clients
     * @return void
     */
    public function up()
    {
        Schema::create('contratos', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id')->unsigned();
            $table->integer('tipoevents_id')->unsigned();
            $table->integer('clients_id')->unsigned();

            $table->string('direccion', 150)->nullable();
            $table->datetime('fecha')->nullable();           
            $table->double('precio');
            $table->enum('status', ['REALIZADO', 'ESPERA'])->default('ESPERA');

            $table->timestamps();

            //Relaciones en usuarios en cuanto a sus clientes y su evento
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('tipoevents_id')->references('id')->on('tipoevents')
                ->onDelete('cascade')
                ->onUpdate('cascade');  
            $table->foreign('clients_id')->references('id')->on('clients')
                ->onDelete('cascade')
                ->onUpdate('cascade');     
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contratos');
    }
}
