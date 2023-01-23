<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdministrateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrateurs', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->unsignedBigInteger("id_ent");
            $table->string('nom_admn');
            $table->string("prenom_admn");
            $table->string("email_admn")->unique();
            $table->string("numero_admn");
            $table->text("password_admn");
            $table->string('photo_admn');
            $table->string('residence_admn');
            $table->timestamps();
            $table->foreign('id_ent')
            ->references('id')
            ->on("entreprises")
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
        Schema::dropIfExists('administrateurs');
    }
}
