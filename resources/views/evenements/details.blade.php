@extends('template')

@section('content')

    <a href="/evenements" >Retour</a>

    <h1>{{$evenement->libelle}}</h1>
    <div>
        {{$evenement->description}}
    </div>
    <div>
        <p>{{$evenement->prix}} €</p>
    </div>
    <div>
        {{$evenement->urlPhotoPrincipale}}
    </div>
    <hr>
    <small>Poster le {{$evenement->created_at}}</small>
    <hr>
    <a href="/evenements/{{$evenement->id}}/edit" class="btn btn-default"> Modifier</a>
    {!!Form::open(['action'=>['EvenementsController@destroy',$evenement->id],'method'=>'POST', 'class'=> 'pull-right'])!!}
    {{Form::hidden('_method','DELETE')}}
    {{Form::submit('Supprimer',['class'=>'btn btn-danger'])}}
    {!!Form::close()!!}

@endsection