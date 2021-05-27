@extends('layouts.base')

@section('pageTitle')
    Modifica: {{$post->title}}
@endsection

@section('content')
    <form action="{{route('admin.posts.update', ['post' => $post->id])}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="email" class="form-control" id="title" name="title" placeholder="Title" value="{{$post->title}}">
        </div>
        <div class="form-group">
            <label for="date">Data</label>
            <input type="email" class="form-control" id="date" name="date" placeholder="Date" value="{{$post->date}}">
        </div>
        <div class="form-group">
            <label for="content">Contenuto</label>
            <textarea class="form-control" id="content" name="content" placeholder="Content">{{$post->content}}</textarea>
        </div>
        <div class="form-group">
            <label for="image">Immagine</label>
            <input type="email" class="form-control" id="image" name="image" placeholder="Image" value="{{$post->image}}">
        </div>
        <div class="form-check form-check-inline">
            <label class="form-check-label" for="published">Pubblicato</label>
            <input class="form-check-input" type="checkbox" id="published" name="published" value="{{$post->published ? 'checked' : ''}}">
        </div>
        <div class="mt-3">
            <button type="submit" class="btn btn-primary">Modifica</button>
        </div>
    </form>
@endsection