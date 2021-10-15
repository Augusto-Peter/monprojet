<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projets', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 256);
            $table->date('ddd');
            $table->date('ddf');
            $table->string('etape', 256);
            $table->string('pv', 256);
            $table->string('chef_projet', 256);
            $table->timestamps();

            $table->unsignedBigInteger('personne_id');
            $table->foreign('personne_id')
            ->references('id')
            ->on('personnes')
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
        Schema::dropIfExists('projets');
    }
}
