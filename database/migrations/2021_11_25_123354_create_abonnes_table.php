<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class   CreateAbonnesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abonnes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom');
            $table->string('prenom');
            $table->string('adresse');
            $table->string('tel');
            $table->string('email');
            $table->date('dateNaissence');
            $table->date('endDate');
            $table->string('status');
            $table->boolean('notification');
            $table->integer('package_id');
            $table->integer('Warning')->nullable()->change();


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
        Schema::dropIfExists('abonnes');
    }
}
