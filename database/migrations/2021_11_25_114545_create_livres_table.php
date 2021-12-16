<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLivresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livres', function (Blueprint $table) {

            $table->increments('id');
            $table->string('titre');
            $table->bigInteger('auteur');
            $table->string('isbn');
            $table->string('editeur');
            $table->string('langue');
            $table->string('nombre_exmp');
            $table->text('description');
            $table->string('annee');
            $table->string('Photo');
            $table->string('livre_code');
            $table->text('livre_barcode');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('livres');
    }

}
