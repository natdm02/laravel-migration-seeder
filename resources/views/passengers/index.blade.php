@extends('layouts.app')

@section('content')
    <h1>Lista Passeggeri</h1>
    <ul>
        @foreach($passengers as $passenger)
            <li>{{ $passenger->name }} - {{ $passenger->email }} - {{ $passenger->phone }}</li>
        @endforeach
    </ul>
@endsection
