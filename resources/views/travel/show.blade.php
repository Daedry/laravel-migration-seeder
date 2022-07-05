@extends('layouts.app')

@section('content')
<div>
    <h3>{{$travel->luogo}}</h3>
    <img class="img-fluid" src="https://picsum.photos/600/400" alt="{{$travel->luogo}}">
</div>

<div class="details py-3">
    <span> <strong>Pacchetto: </strong> {{$travel->pacchetto}} </span>
    <span> <strong>Prezzo: </strong> {{$travel->prezzo}}</span>
    <p> {{$travel->descrizione}} </p>
    <p> <strong>Giorni: </strong> {{$travel->giorni}} </p>
    <p><strong>Data inizio: </strong> {{$travel->data_inizio}}</p>
    <p><strong>Data fine: </strong>  {{$travel->data_fine}}</p>
</div>

@endsection