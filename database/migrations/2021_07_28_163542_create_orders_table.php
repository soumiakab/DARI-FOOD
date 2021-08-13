<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('command_id')->unsigned();
            $table->bigInteger('plat_id')->unsigned();
            $table->bigInteger('quantity')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('adress_id')->unsigned();
            $table->string('date_livraison')->nullable();
            $table->integer('status');
            $table->timestamps();
            $table->foreign('command_id')->references('id')->on('commands')->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('plat_id')->references('id')->on('plats')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('adress_id')->references('id')->on('adresses')->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
