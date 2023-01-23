<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePayementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payements', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("id_pay")->unique();
            $table->string('numeroCart');
            $table->string('espece');
            $table->string('montant');
            $table->unsignedBigInteger("id_com");
            $table->unsignedBigInteger("id_moy");
            $table->date("date_pay");
            $table->foreign('id_com')
            ->references('id')
            ->on("commandes")
            ->onDelete('cascade');

            $table->foreign('id_com')
            ->references('id')
            ->on("moyens")
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
        Schema::dropIfExists('payements');
    }
}
