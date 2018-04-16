@extends('layouts.app')

@section('content')
    <a href="/accueil" class="btn btn-primary" >Retour</a>
    <h1>{{$photo->url}}</h1>
<div>
    Poster par {{$photo->user->prenom}} {{$photo->user->nom}}
</div>

<div>
   Provient de l'événement {{$photo->evenement->libelle}}
</div>
<hr>
<small>Poster le {{$photo->created_at}}</small>
<hr>
    <div>
        {{Form::open(['route'=>['commentaires.store',$photo->id,'method'=>"POST"]])}}
    <div>
        {{Form::label('contenu','Commentaire:')}}
        {{Form::textarea('contenu','',['class'=>'form-control','placeholder'=>'Commentaire'])}}
        {{Form::submit('Ajouter le commentaire')}}
    </div>
        {{Form::close()}}
    </div>
@endsection