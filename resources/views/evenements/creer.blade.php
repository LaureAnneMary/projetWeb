@extends('template')

@section('headtop')
    <link href="{{ asset('css/style-desktop.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/skel-noscript.css') }}" rel="stylesheet">
@endsection

@section('content')
    <a href="/evenements" >Retour</a>

    <a>Proposer un Evenement</a>
    {{--{!! Form::open(['action' => 'EvenementsController@store','method'=>'POST']) !!}--}}
    {!! Form::open(array(
        'route' => 'evenements.store',
        'files' => true,
        'novalidate'=>'novalidate'))
        !!}

    {{--Entrer un nom a l'evenement--}}
    <div class="form-group">
        {{Form::label('libelle','libelle')}}
        {{Form::text('libelle','',['class'=>'form-control','placeholder'=>'libelle'])}}
    </div>

    {{--Mettre une image a l'événement--}}
    <div class="form-group">
        {{Form::file('urlPhotoPrincipale',null,array('class'=>'form-control'))}}
    </div>

    {{--Ajouter une description à l'événement--}}
    <div class="form-group">
        {{Form::label('description','Description')}}
        {{Form::textarea('description','',['class'=>'form-control','placeholder'=>'Description'])}}
    </div>

    {{--Ajouter une prix a l'événement--}}
    <div class="form-group">
        {{Form::label('prix','Prix')}}
        {{Form::text('prix','',['class'=>'form-control','placeholder'=>'Prix'])}}
    </div>
    {{Form::submit('Suggérer',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}

@endsection