@extends('layouts.main')

@section('title', "HDC Events")

@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque um evento</h1>
    <form action="">
        <input
            type="text"
            id="search"
            name="search"
            class="form-control"
            placeholder="Procurar..."
        >
    </form>
</div>
<div id="events-container" class="col-md-12">
    <h2 class="subtitle">Próximos Eventos</h2>
    <p>Veja os eventos dos próximos dias</p>
    <div id="cards-container" class="row">
        @foreach($events as $event)
            <div class="card col-md-3">
                <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
                <div class="card-body">
                    <h4 class="card-title">{{ $event->title }}</h4>
                    <p class="card-date">{{ $event->data }}</p>
                    <p class="event-city">
                        <ion-icon name="location-outline"></ion-icon>{{ $event->city }}
                    </p>
                    <p class="card-participants">{{ $event->participants }} Participantes</p>
                    <h5 class="card-description">{{ $event->description }}</h5>
                    <a href="/events/{{ $event->id }}" class="btn btn-primary">Saber mais</a>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection
