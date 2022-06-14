<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacchettiViaggioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacchetti_viaggio', function (Blueprint $table) {
            $table->id();
            $table->string('luogo', 50 );
            $table->string('pacchetto', 50);
            $table->string('giorni', 50);
            $table->date('data_inizio');
            $table->date('data_fine');
            $table->text('descrizione');
            $table->decimal('prezzo', 5, 2);
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
        Schema::dropIfExists('pacchetti_viaggio');
    }
}
