@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie o seu evento</h1>
    <form action="/events" method="POST" enctype="multipart/form-data">
         @csrf
         <div class="form-group">
            <label for="image">Imagem do Evento:</label>
            <input type="file" class="form-control-file" id="image" name="image">
        </div>
        <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Evento">
        </div>
        <div class="form-group">
            <label for="title">Data:</label>
            <input type="date" class="form-control" id="data" name="data">
        </div>
        <div class="form-group">
            <label for="title">Cidade:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento">
        </div>
        <div class="form-group">
            <label for="title">O Evento é privado?</label>
            <select class="form-control" name="private" id="private">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <div class="form-group">
            <label for="title">Participantes:</label>
            <input type="number" class="form-control" id="participants" name="participants" placeholder="Participantes">
        </div>
        <div class="form-group">
            <label for="title">Descrição:</label>
            <textarea
                class="form-control"
                id="description"
                name="description"
                placeholder="O que vai acontecer no evento?"
            >
            </textarea>
        </div>
        <div class="form-group">
            <label for="title">Adicione itens de infraestrutura:</label>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Cadeiras"> Cadeiras
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Palco"> Palco
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Open food"> Open food
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Cerveja"> Cerveja
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Brindes"> Brindes
            </div>
            <div class="form-button">
                <input type="submit" class="btn btn-primary" value="Criar Evento">
            </div>
        </div>
    </form>
</div>

@endsection
