@extends('template')
@section('headtop')
    <link href="{{ asset('css/style-desktop.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/skel-noscript.css') }}" rel="stylesheet">
@endsection

@section('content')

    <a href="/evenementsValider" class="btn btn-primary" >Retour</a>

    <h1>{{$evenementValider->libelle}}</h1>

        <p>{{$evenementValider->description}}</p>

        <p>{{$evenementValider->prix}} €</p>

    </div>
    <div>
        <p><img width="400" src="{{asset('images/'.$evenementValider->urlPhotoPrincipale)}}"/> </p>
    </div>
    <hr>
    <small>Posté le {{$evenementValider->created_at}}</small>
    @can('delete',$evenementValider)
        {!!Form::open(['action'=>['EvenementsValiderController@destroy',$evenementValider->id],'method'=>'POST', 'class'=> 'pull-right'])!!}
        {{Form::hidden('_method','DELETE')}}
        {{Form::submit('Supprimer',['class'=>'btn btn-danger'])}}
        {!!Form::close()!!}
    @endcan

    <hr>
    {!!Form::open(['action'=> ['EvenementsValiderController@store', $evenementValider->id], 'method' => 'POST']) !!}
        {{Form::hidden('_method', 'POST')}}
        {{Form::submit("Inscription")}}
    {!!Form::close() !!}

    <hr>
    <small>Poster le {{$evenementValider->created_at}}</small>
@endsection

