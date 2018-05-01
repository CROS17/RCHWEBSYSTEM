<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *tipodocs
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id')->unsigned();
            $table->integer('tipoclients_id')->unsigned();
            $table->integer('tipodocs_id')->unsigned();

            $table->string('name',150);
            $table->string('correo', 150)->nullable();
            $table->char('telefono', 9)->nullable();           
            $table->char('celular', 11)->nullable();

            $table->timestamps();

            //Relaciones en usuarios en cuanto a sus clientes 
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('tipoclients_id')->references('id')->on('tipoclients')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('tipodocs_id')->references('id')->on('tipodocs')
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
        Schema::dropIfExists('clients');
    }
}
