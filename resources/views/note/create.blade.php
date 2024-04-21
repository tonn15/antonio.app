@extends('note.layout')

@section('content')
    <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh">
        <div class="w-40 card p-5">
            <form action="{{route('blocnote.store')}}" method="POST">
                @csrf
                <h1 class="text-uppercase text-primary">Page de creation d'un nouvel tache</h1>
                <div class="form-group mt-4">
                    <label for="titre">Titre</label>
                    <input name="titre" type="text" class="form-control mt-2" placeholder="titre de la tache" name="" required>
                    <small class="text-danger form-text ">veuillez inserer un titre valable</small>
                </div>
                <div class="form-group mt-4">
                    <label for="contenu">Contenu</label>
                    <input name="contenu" type="text" class="form-control mt-2" placeholder="contenu" required>
                    <small class="text-danger form-text "> Veuillez inserer des contenus </small>
                </div>
                <div class="d-flex justify-content-end mt-4">
                    <button class="btn btn-primary me-3" type="submit">Envoyer</button>
                    <a class="btn btn-secondary " href="{{route("blocnote.index")}}">retour</a>
                </div>
            </form>

        </div>
    </div>
@endsection
