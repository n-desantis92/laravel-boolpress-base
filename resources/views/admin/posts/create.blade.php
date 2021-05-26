@extends('layouts.base')

@section('pageTitle')
    Crea un nuovo post
@endsection

@section('content')
    <form action="{{route('admin.posts.store')}}" method="POST">
        @csrf
        @method('POST')
        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="email" class="form-control" id="title" name="title" placeholder="Title">
        </div>
        <div class="form-group">
            <label for="date">Data</label>
            <input type="email" class="form-control" id="date" name="date" placeholder="Date">
        </div>
        <div class="form-group">
            <label for="content">Contenuto</label>
            <input type="email" class="form-control" id="content" name="content" placeholder="Content">
        </div>
        <div class="form-group">
            <label for="image">Immagine</label>
            <input type="email" class="form-control" id="image" name="image" placeholder="Image">
        </div>
        <div class="form-check form-check-inline">
            <label class="form-check-label" for="published">Pubblicato</label>
            <input class="form-check-input" type="checkbox" id="published" name="published">
        </div>
        <div class="mt-3">
            <button type="submit" class="btn btn-primary">Crea</button>
        </div>
    </form>
@endsection