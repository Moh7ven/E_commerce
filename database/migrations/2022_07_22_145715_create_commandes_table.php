<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("id_com")->unique();
            $table->unsignedBigInteger("id_client");
            $table->string("quantity");
            $table->string('total');
            $table->date("heure_com");

            $table->foreign('id_client')
            ->references('id')
            ->on("clients")
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commandes');
    }
}
