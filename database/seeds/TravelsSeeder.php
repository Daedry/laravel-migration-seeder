<?php

use App\Travel;

use Illuminate\Database\Seeder;

class TravelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $travels = config('db.travels');

        foreach ($travels as $travel) {
            $new_travel = new Travel();
            $new_travel->luogo = $travel['luogo'];
            $new_travel->pacchetto = $travel['pacchetto'];
            $new_travel->giorni = $travel['giorni'];
            $new_travel->data_inizio = $travel['data_inizio'];
            $new_travel->data_fine = $travel['data_fine'];
            $new_travel->descrizione = $travel['descrizione'];
            $new_travel->prezzo = $travel['prezzo'];
            $new_travel->save();
        }
    }
}
