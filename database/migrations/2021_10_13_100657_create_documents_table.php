<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->char('nom', 30);
            $table->string('type',256);
            $table->unsignedInteger('taille');
            $table->string('description',256);
            $table->string('auteur',256);
            $table->string('pv',256);
            $table->string('chemin',256);
            $table->timestamps();

            $table->unsignedBigInteger('consultation_id');
            $table->foreign('consultation_id')
            ->references('id')
            ->on('consultations')
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
        Schema::dropIfExists('documents');
    }
}
