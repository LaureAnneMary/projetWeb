@extends('template')
@section('headtop')
    <link href="{{ asset('css/style-desktop.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/skel-noscript.css') }}" rel="stylesheet">
@endsection

@section('content')
<!DOCTYPE html>

<html>

<head>

    <title>Utilisateurs</title>

</head>

<body>

    <h1>{{$users->prenom}} {{$users->nom}} </h1>
    <small>Créé le {{$users->created_at}}</small>
    <hr>
    <ul>
    <li> - Entrer 1 pour étudiants</li>
    <li> - Entrer 2 pour membres du BDE</li>
    <li> - Entrer 3 pour salariés du CESI</li>
    </ul>
<div>
    {!!  Form::open(['action' => ['UserController@update', $users->id], 'method' => 'POST']) !!}
            {{Form::label('id_Rang_Utilisateur', 'Rang de l\'utilisateur')}}
            {{Form::text('id_Rang_Utilisateur', $users->id_Rang_Utilisateur)}}
            {{Form::hidden('_method','PUT')}}
            {{Form::submit('Modifier',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}

    {!!Form::open(['action'=> ['UserController@destroy', $users->id], 'method' => 'POST']) !!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete')}}
    {!!Form::close() !!}
    
</div>

</body>

</html>
@endsection