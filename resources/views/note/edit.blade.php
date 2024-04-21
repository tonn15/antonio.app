@extends('note.layout')
@section('content')
    <div class="d-flex align-items-center justify-content-center" style="min-height: 100vh">
        <div class="card p-5 w-40">
            <h1 class="text-uppercase text-primary text-center" >MODIFICATION</h1>
            <hr class="hr">
            <form action="{{route('blocnote.update',$blocnote->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="titre">Titre</label>
                    <input type="text" value="{{$blocnote->titre}}" class="form-control" name="titre">
                </div>
                <div class="form-groupe mt-3">
                    <label for="contenu">Contenu</label>
                    <input type="text" value="{{$blocnote->contenu}}" class="form-control" name="contenu">
                </div>
                <div class="d-flex justify-content-end mt-3">
                    <button class="btn btn-primary me-3" type="submit">Edit</button>
                    <a class="btn btn-secondary" href="{{route('blocnote.index')}}" >Retour</a>
                </div>
            </form>
        </div>
    </div>
@endsection

