@extends('template')
@section('headtop')
    <link href='http://fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>
    @endsection
@section('content')
    <a href="/evenements" class="btn btn-primary" >Retour</a>

    <h1>Modifier un Evenement</h1>
    {{--Nous faisons appel à la méthode update dans le controleur en lui envoyant l'id de l'événement à modifier--}}
    {{--Pour que l'update fonction, il faut que le methode que l'on utilise soit un PUT ou un PATCH mais on ne peut pas changer le ligne pour autant ( car Laravel n'autorise que les POST ou les GET, il va falloir en ajouter une--}}
    {!! Form::open(['action' => ['EvenementsController@update',$evenement->id],'method'=>'POST']) !!}


  {{--Modifier l'image a l'événement--}}
    <div class="form-group">
        {{Form::label('urlPhotoPrincipale','Image')}}
        {{Form::text('urlPhotoPrincipale',$evenement->urlPhotoPrincipale,['class'=>'form-control','placeholder'=>'URL Image'])}}
    </div>

    {{--Modifier la description à l'événement--}}
    <div class="form-group">
        {{Form::label('description','Description')}}
        {{Form::textarea('description',$evenement->description,['class'=>'form-control','placeholder'=>'Description'])}}
    </div>

    <div class="form-group">
        {{Form::label('dateEvenement','Ajouter une date de l événement')}}
        {{Form::text('dateEvenement',$evenement->dateEvenement,['class'=>'form-control','placeholder'=>'Ajouter une date'])}}
    </div>

        {{--Cette ligne va nous permettre de faire notre requête PUT--}}
    {{Form::hidden('_method','PUT')}}

    {{Form::submit('Modifier',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}

@endsection