@extends('note.layout')
@section('content')
    <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh">
        <div class="card p-4">
            <h1 class="text-uppercase text-primary">{{$blocnote->titre}}</h1>
            <small>{{$blocnote->created_at}}</small>
            <hr class="hr">
            <p>{{$blocnote->contenu}}</p>
            <a href="{{route('blocnote.index')}}" class="btn btn-secondary">Retour</a>
        </div>
    </div>
@endsection
