<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travel', function (Blueprint $table) {
            $table->id();
            $table->string('luogo', 50 );
            $table->text('pacchetto', 300)->nullable();
            $table->string('giorni', 50);
            $table->date('data_inizio')->nullable();
            $table->date('data_fine')->nullable();
            $table->text('descrizione')->nullable();
            $table->decimal('prezzo', 5, 3);
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
        Schema::dropIfExists('travel');
    }
}
