<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfirmationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('confirmations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_conf')->unique();
            $table->string('lib_conf')->unique();
            $table->unsignedBigInteger("id_admn");
            $table->unsignedBigInteger("id_com");
            $table->foreign('id_admn')
            ->references('id')
            ->on("administrateurs")
            ->onDelete('cascade');

            $table->foreign('id_com')
            ->references('id')
            ->on("commandes")
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
        Schema::dropIfExists('confirmations');
    }
}
