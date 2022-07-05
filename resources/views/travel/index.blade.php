@extends('layouts.app')

@section('content')

<div class="p-5 bg-light">
    <div class="container text-center">
        <h1 class="display-3">Offerte viaggi</h1>
        <p class="lead">Trova il pacchetto viaggio perfetto per te!</p>
    </div>
</div>

<section class="offers my-4">

    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 g-4">
            @forelse($travels as $travel)
            <div class="col">
                <div class="card">
                    <span class="badge badge-success bg-success p-2">{{$travel->prezzo}}</span>
                    <div class="card-body">
                        <h3>{{$travel->luogo}}</h3>

                    </div>
                    <div class="card-footer">
                        <img src="https://picsum.photos/600/400" alt="">
                        <div class="pt-3">
                            <p>{{$travel->pacchetto}} - {{$travel->giorni}}</p>
                            <a href="{{route('travel.show', $travel->id)}}">Scopri di più</a>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col">
                <p>No offers sorry!</p>
            </div>
            @endforelse
        </div>
    </div>

</section>

@endsection