
@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <h1>Home Page</h1>

    @if($trains->isEmpty())
        <p>Non ci sono treni in partenza.</p>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Azienda</th>
                    <th>Stazione di Partenza</th>
                    <th>Stazione di Arrivo</th>
                    <th>Orario di Partenza</th>
                    <th>Orario di Arrivo</th>
                    <th>Codice Treno</th>
                    <th>Numero Carrozze</th>
                    <th>In Orario</th>
                </tr>
            </thead>
            <tbody>
                @foreach($trains as $train)
                <tr>
                    <td>{{ $train->azienda }}</td>
                    <td>{{ $train->stazione_partenza }}</td>
                    <td>{{ $train->stazione_arrivo }}</td>
                    <td>{{ \Carbon\Carbon::parse($train->orario_partenza)->format('H:i') }}</td>
                    <td>{{ \Carbon\Carbon::parse($train->orario_arrivo)->format('H:i') }}</td>
                    <td>{{ $train->codice_treno }}</td>
                    <td>{{ $train->numero_carrozze }}</td>
                    <td>{{ $train->in_orario ? 'Sì' : 'No' }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    <h2>Lista Passeggeri</h2>

    @if($passengers->isEmpty())
        <p>Non ci sono passeggeri registrati.</p>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Cognome</th>
                    <th>Email</th>
                    <th>Età</th>
                    <th>Treno</th>
                </tr>
            </thead>
            <tbody>
                @foreach($passengers as $passenger)
                <tr>
                    <td>{{ $passenger->nome }}</td>
                    <td>{{ $passenger->cognome }}</td>
                    <td>{{ $passenger->email }}</td>
                    <td>{{ $passenger->eta }}</td>
                    <td>{{ $passenger->train_id ? $passenger->train->codice_treno : 'N/A' }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif

@endsection
