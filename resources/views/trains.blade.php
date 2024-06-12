@extends('layouts.app')

@section('content')
    <h2>Treni</h2>
    <div class="row">
        @foreach ($trains as $item)
            <div class="card col-4 mb-4">
                <div class="card-body">
                    <h5 class="card-title">{{$item->Codice_Treno}}</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">{{$item->Stazione_di_partenza}} - {{$item->Stazione_di_arrivo}}</h6>
                    <h6 class="card-subtitle mb-2 text-body-secondary">{{$item->Orario_di_partenza}} - {{$item->Orario_di_arrivo}}</h6>
                    <p class="card-text">Carrozze: {{$item->Numero_Carrozze}}</p>
                    <p class="card-text">In orario: {{$item->In_orario ? "Si" : "No"}}</p>
                    <p class="card-text">Cancellato: {{$item->Cancellato ? "Si" : "No"}}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
