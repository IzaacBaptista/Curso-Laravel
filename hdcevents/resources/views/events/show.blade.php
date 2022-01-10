@extends('layouts.main')

@section('title', $event->title)

@section('content')

    <div class="col-md-10 offset-md-1">
        <div class="row">
            <div id="image-container" class="col-md-6">
                <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}" class="img-fluid">
            </div>
            <div id="info-container" class="col-md-6">
                <h1>{{ $event->title }}</h1>
                <p class="event-city">
                    <img src="https://img.icons8.com/ios-glyphs/20/000000/place-marker.png"/>{{ $event->city }}
                </p>
                <p class="events-participants">
                    <img src="https://img.icons8.com/ios-filled/20/000000/conference-call.png"/>{{ $event->participants }} Participantes
                </p>
                <p class="event-owner">
                    <img src="https://img.icons8.com/material-sharp/20/000000/star--v1.png"/>Dono do Evento
                </p>
                <a href="#" class="btn btn-primary" id="event-submit">Confirmar Presença</a>
                <h3>O Evento conta com:</h3>
                <ul id="items-list">
                @foreach($event->items as $item)
                    <li><img src="https://img.icons8.com/ios-filled/20/000000/play--v1.png"/>{{ $item }} </span></li>
                @endforeach
                </ul>
            </div>
            <div class="col-md-12" id="description-container">
                <h3>Sobre o Evento</h3>
                <p class="event-description">
                    {{ $event->description}}
                </p>
            </div>
        </div>
    </div>

@endsection
