@extends('layouts.app')

@section('content')
    <a href="/evenements" >Retour</a>

    <h1>Proposer un Evenement</h1>
    {!! Form::open(['action' => 'EvenementsController@store','method'=>'POST']) !!}

        {{--Entrer un nom a l'evenement--}}
        <div class="form-group">
            {{Form::label('libelle','libelle')}}
            {{Form::text('libelle','',['class'=>'form-control','placeholder'=>'libelle'])}}
        </div>

        {{--Mettre une image a l'événement--}}
    <div class="form-group">
        {{Form::label('urlPhotoPrincipale','Image')}}
        {{Form::text('urlPhotoPrincipale','',['class'=>'form-control','placeholder'=>'URL Image'])}}
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