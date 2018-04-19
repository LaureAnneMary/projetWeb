@extends('template')

@section('headtop')
    <link href="{{ asset('css/style-desktop.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/skel-noscript.css') }}" rel="stylesheet">
@endsection

@section('content')

    <a href="/evenements" >Retour</a>

    <h1>{{$evenement->libelle}}</h1>
    <div>
        {{$evenement->description}}
    </div>
    <div>
        <p>{{$evenement->prix}} €</p>
    </div>
    <di>
        {{$evenement->dateEvenement}}
    </di>
    <div>
        <p><img width="400" src="{{asset('images/'.$evenement->urlPhotoPrincipale)}}"/> </p>
    </div>
    <hr>
    <small>Posté le {{$evenement->created_at}}</small>
    <hr>
    
    @can('update', $evenement)
    <a href="/evenements/{{$evenement->id}}/edit" class="btn btn-default"> Modifier</a>
    @endcan

    <p>{{$evenement->vote}}</p>
    {!! Form::open(['action' => ['EvenementsController@update',$evenement->id],'method'=>'POST']) !!}
    {{Form::hidden('_method','PATCH')}}
    {{Form::hidden('vote','true')}}
    {{Form::submit('Voter',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}

    @can('delete',$evenement)
    {!!Form::open(['action'=>['EvenementsController@destroy',$evenement->id],'method'=>'POST', 'class'=> 'pull-right'])!!}
    {{Form::hidden('_method','DELETE')}}
    {{Form::submit('Supprimer',['class'=>'btn btn-danger'])}}
    {!!Form::close()!!}
    @endcan

@endsection