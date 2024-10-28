
@extends('layouts.app')

@section('title', 'Home Page')

@section('content')

    <h1>home page</h1>

    @if($trains->isEmpty())
        <p>non ci sono treni in partenza</p>
    @else

        <ul>
            @foreach($trains as $train)

            <li>

                <strong>Azienda:</strong> {{ $train->azienda }} <br>
                <strong>Stazione di partenza:</strong> {{ $train->stazione_partenza }} <br>
                <strong>Stazione di arrivo:</strong> {{ $train->stazione_arrivo }} <br>
                <strong>Orario di partenza:</strong> {{ $train->orario_partenza }} <br>
                <strong>Orario di arrivo:</strong> {{ $train->orario_arrivo }} <br>
                <strong>Codice Treno:</strong> {{ $train->codice_treno }} <br>
                <strong>Numero Carrozze:</strong> {{ $train->numero_carrozze }} <br>
                <strong>In orario:</strong> {{ $train->in_orario ? 'Sì' : 'No' }}
            </li>

            @endforeach
        </ul>
    @endif

@endsection
