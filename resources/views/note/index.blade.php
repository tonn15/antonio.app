@extends('note.layout')

@section('content')
    <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh">
        <div>
            <h1>Bonjour Antonio,</h1>
            <p>Veuillez trouver ci-dessous la liste des taches aujourd'hui: </p>

            <table class="table ">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Titre</th>
                    <th>Contenu</th>
                    <th>CRUD</th>
                </tr>
                </thead>
                <tbody>
                @forelse($notes as $note)
                    <tr>
                        <th scope="row">{{$note->id}}</th>
                        <td class="text-uppercase">{{$note->titre}}</td>
                        <td>{{$note->contenu}}</td>
                        <td>
                            <form action="{{route('blocnote.destroy',$note->id)}}" method="POST">
                                <a href="{{route('blocnote.show',$note->id)}}" class="btn btn-primary">view</a>
                                <a href="{{route('blocnote.edit',$note->id)}}" class="btn btn-warning">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <div class="card p-4">
                        <h3>Inserez ici la liste de vos competense</h3>
                    </div>
                @endforelse
                </tbody>
            </table>

            <div class="d-flex justify-content-end">
                <a href="{{route("blocnote.create")}}" class="btn btn-success"> Add</a>
            </div>
        </div>
    </div>
@endsection
