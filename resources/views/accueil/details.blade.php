@extends('template')

@section('content')
    <a href="/" class="btn btn-primary" >Retour</a>
    <h1>{{$photo->url}}</h1>
<div>
    Posté par {{$photo->user->prenom}} {{$photo->user->nom}}
</div>
   <div>
    <p><img width="600" src="{{asset('images/'.$photo->url)}}"/> </p>
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
            @can('permission')
                {!!Form::open(['action'=>['CommentairesController@destroy',$commentaire->id],'method'=>'POST', 'class'=> 'pull-right'])!!}
                {{Form::hidden('_method','DELETE')}}
                {{Form::submit('Supprimer',['class'=>'btn btn-danger'])}}
                {!!Form::close()!!}
                @endcan

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