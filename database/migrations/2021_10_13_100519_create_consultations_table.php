<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultations', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('methode_therapeutique',256);
            $table->string('description',256);
            $table->string('therapeute',256);
            $table->timestamps();

            $table->unsignedBigInteger('personne_id');
            $table->foreign('personne_id')
            ->references('id')
            ->on('personnes')
            ->onDelete('restrict')
            ->onUpdate('restrict');

            $table->unsignedBigInteger('therapy_id');
            $table->foreign('therapy_id')
            ->references('id')
            ->on('therapies')
            ->onDelete('restrict')
            ->onUpdate('restrict');

            $table->unsignedBigInteger('projet_id');
            $table->foreign('projet_id')
            ->references('id')
            ->on('projets')
            ->onDelete('restrict')
            ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consultations');
    }
}
