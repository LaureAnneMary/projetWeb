@extends('template')

@section('content')
    <a href="/produits" >Retour</a>

    <a>Ajouter un nouveau produit</a>
    {!! Form::open(['action' => 'ProduitsController@store','method'=>'POST']) !!}

    {{--Entrer un nom au produit--}}
    <div class="form-group">
        {{Form::label('libelle','libelle')}}
        {{Form::text('libelle','',['class'=>'form-control','placeholder'=>'libelle'])}}
    </div>

    {{--Ajouter une description au produit--}}
    <div class="form-group">
        {{Form::label('description','Description')}}
        {{Form::textarea('description','',['class'=>'form-control','placeholder'=>'Description'])}}
    </div>

    {{--Ajouter une prix au produit--}}
    <div class="form-group">
        {{Form::label('prix','Prix')}}
        {{Form::text('prix','',['class'=>'form-control','placeholder'=>'Prix'])}}
    </div>
    {{Form::submit('Ajouter',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}

@endsection