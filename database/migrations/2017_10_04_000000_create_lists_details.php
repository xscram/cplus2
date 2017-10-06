<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListsDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lists_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codice_contatto');
            $table->string('ragione_sociale');
            $table->string('titolare_azienda');
            $table->string('contatto');
            $table->string('settore');
            $table->string('telefono');
            $table->string('cellulare');
            $table->string('fax');
            $table->string('email');
            
            $table->string('indirizzo');
            $table->string('citta');
            $table->string('provincia');
            $table->int('provincia');
            
            $table->decimal('latitudine',13,8);
            $table->decimal('longitudine',13,8);
            
            $table->string('sito_web');
            $table->text('note');


            
            $table->string('email')->unique();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lists_details');
    }
}
