<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('carts', function (Blueprint $table) {
        //     $table->id();
        //     $table->bigInteger('plat_id')->unsigned();
        //     $table->bigInteger('quantity')->unsigned();
        //     $table->bigInteger('user_id')->unsigned();
        //     $table->timestamps();
        //     $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        //     $table->foreign('plat_id')->references('id')->on('plats')->onUpdate('cascade')->onDelete('cascade');

        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('carts');
    }
}
