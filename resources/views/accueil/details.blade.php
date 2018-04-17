@extends('template')

@section('content')
    <a href="/" class="btn btn-primary" >Retour</a>
    <h1>{{$photo->url}}</h1>
<div>
    Poster par {{$photo->user->prenom}} {{$photo->user->nom}}
</div>

<div>
   Provient de l'événement {{$photo->evenement->libelle}}
</div>

    <hr>

<div>
    @foreach($photo->commentaire as $commentaire)
        <div>
            <small>{{$commentaire->dateCommentaire}}</small>
            <p> <strong>{{$commentaire->user->prenom}}</strong> : {{$commentaire->contenu}} </p>

        </div>
        @endforeach
</div>

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