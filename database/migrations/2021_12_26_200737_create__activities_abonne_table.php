<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitiesAbonneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_activities_abonne', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('livre_id');
            $table->bigInteger('abonne_id');
            $table->string('status');
            $table->string('bookName');
            $table->timestamps('date');
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
        Schema::dropIfExists('_activities_abonne');
    }
}
