@extends('template')

@section('headtop')
    <link href="{{ asset('css/style-desktop.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/skel-noscript.css') }}" rel="stylesheet">
@endsection

@section('content')
    <a href="/produits" class="btn btn-primary" >Retour</a>

    <h1>Modifier un Produit</h1>
    {{--Nous faisons appel à la méthode update dans le controleur en lui envoyant l'id de l'événement à modifier--}}
    {{--Pour que l'update fonction, il faut que le methode que l'on utilise soit un PUT ou un PATCH mais on ne peut pas changer le ligne pour autant ( car Laravel n'autorise que les POST ou les GET, il va falloir en ajouter une--}}
    {!! Form::open(['action' => ['ProduitsController@update',$produit->id],'method'=>'POST']) !!}

    {{--Modifier lle nom du produit--}}
    <div class="form-group">
        {{Form::label('libelle','Libelle')}}
        {{Form::text('libelle',$produit->libelle,['class'=>'form-control','placeholder'=>'Libelle'])}}
    </div>

    {{--Modifier la description du produit--}}
    <div class="form-group">
        {{Form::label('description','Description')}}
        {{Form::textarea('description',$produit->description,['class'=>'form-control','placeholder'=>'Description'])}}
    </div>

    {{--Modifier le prix du produit--}}
    <div class="form-group">
        {{Form::label('prix','Prix')}}
        {{Form::text('prix',$produit->prix,['class'=>'form-control','placeholder'=>'Prix'])}}
    </div>

    {{--Cette ligne va nous permettre de faire notre requête PUT--}}
    {{Form::hidden('_method','PUT')}}

    {{Form::submit('Modifier',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}

@endsection