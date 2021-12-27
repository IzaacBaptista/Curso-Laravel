@extends('layouts.main')

@section('title', 'Produtos')

@section('content')
    <h1>Produtos</h1>

    @if($busca != '')
    <p>
        Usuário procura por: {{ $busca }}
    </p>
    @endif
@endsection
