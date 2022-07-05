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

        // $travels = [
        //     [
        //         'luogo' => 'Turchia',
        //         'pacchetto' => 'Istambul, Cappadocia, Pamukkale e Antalya',
        //         'giorni' => '11 giorni',
        //         'data_inizio' => '2022-10-22',
        //         'data_fine' => '2020-11-02',
        //         'descrizione' => 'Un viaggio per scoprire ogni angolo di una destinazione ricca di fascino. Ti proponiamo un viaggio alla scoperta dei luoghi che hanno fatto la storia e che ancor oggi affascinano i viaggiatori con la loro magnifica bellezza: Istanbul, Ankara, Pamukkale, Efeso, Smirne e la splendida Cappadocia. E, per finire, goditi un paio di giorni di relax sulla costa di Antalya, che con il suo mix di acque turchesi e di storia antica sarà la ciliegina sulla torta della tua vacanza da sogno.',
        //         'prezzo' => '1.060',
        //     ],
        //     [
        //         'luogo' => 'Messico',
        //         'pacchetto' => 'Città del Messico, San Cristobal, Palenque, Campeche, Yucatan e Riviera Maya',
        //         'giorni' => '12 giorni',
        //         'data_inizio' => '2022-08-22',
        //         'data_fine' => '2022-06-03',
        //         'descrizione' => 'Viaggia attraverso la cultura Maya e visita le città coloniali di San Cristóbal de las Casas e Mérida, i centri archeologici più famosi come Palenque, Uxmal e Chichen Itzá e infine rilassati sulle spiagge caraibiche della Riviera Maya.',
        //         'prezzo' => '2.795',
        //     ],
        //     [
        //         'luogo' => 'Thailandia',
        //         'pacchetto' => 'Tortuguero, Arenal, Monteverde e Guanacaste',
        //         'giorni' => '3 giorni',
        //         'data_inizio' => '2022-09-26',
        //         'data_fine' => '2022-10-07',
        //         'descrizione' => 'Ti piacerebbe godere di uno spettacolo naturale ineguagliabile? Se è così, ti invitiamo a scoprire uno degli angoli più affascinanti del pianeta: la Costa Rica. Un paese magico e ricco di contrasti, nel quale potrai ammirare i paesaggi più sorprendenti: Parchi Nazionali, il Pacifico, vulcani, la foresta nebulosa di Monteverde e le magnifiche spiagge di Guanacaste ... Te lo vuoi perdere?',
        //         'prezzo' => '1.995',
        //     ]

        // ];

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
