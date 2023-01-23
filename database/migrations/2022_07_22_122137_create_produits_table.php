<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_prod')->unique();
            $table->unsignedBigInteger("id_admn");
            $table->string("prix_prod");
            $table->string('lib_prod');
            $table->unsignedBigInteger("id_cat");
            $table->string("attachment_prod");
            $table->string('desc_prod');
            $table->date("date_prod");
            $table->foreign('id_admn')
            ->references('id')
            ->on("administrateurs")
            ->onDelete('cascade');

            $table->foreign('id_cat')
            ->references('id')
            ->on("catogories")
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
        Schema::dropIfExists('produits');
    }
}
