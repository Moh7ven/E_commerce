<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateValidationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('validations', function (Blueprint $table) {
           $table->bigIncrements('id');
            $table->string('id_val')->unique();
            $table->string('lib_val');
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
        Schema::dropIfExists('validations');
    }
}
