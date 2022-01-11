@extends('layouts.main')

@section('title', "HDC Events")

@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque um evento</h1>
    <form action="/" METHOD="GET">
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
    @if($search)
        <h2>Eventos relacionados:</h2>
    @else
        <h2 class="subtitle">Próximos Eventos</h2>
        <p>Veja os eventos dos próximos dias</p>
    @endif
    <div id="cards-container" class="row">
        @foreach($events as $event)
            <div class="card col-md-3">
                <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
                <div class="card-body">
                    <h4 class="card-title">{{ $event->title }}</h4>
                    <p class="card-date"> {{ date('d/m/Y', strtotime($event->data)) }}</p>
                    <p class="event-city">
                        {{ $event->city }}
                    </p>
                    <p class="card-participants">{{ $event->participants }} Participantes</p>
                    <h5 class="card-description">{{ $event->description }}</h5>
                    <a href="/events/{{ $event->id }}" class="btn btn-primary">Saber mais</a>
                </div>
            </div>
        @endforeach
        @if(count($events) == 0 && $search)
            <p>
                Não encontramos nenhum evento relacionado a <b>{{ $search }}!</b>
            </p>
            <p>
                <a href="/">Clique aqui</a> para ver outros eventos.
            </p>
        @elseif(count($events) == 0)
            <p>Não há eventos disponíveis</p>
        @endif
    </div>
</div>

@endsection
