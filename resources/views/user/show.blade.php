<!DOCTYPE html>

<html>

<head>

    <title>Utilisateurs</title>

</head>

<body>

    <h1>{{$users->prenom}} {{$users->nom}} </h1>
    <small>Créé le {{$users->created_at}}</small>
<div>
    {!!  Form::open(['action' => ['UserController@update', $users->id], 'method' => 'POST']) !!}
            {{Form::label('id_Rang_Utilisateur', 'Rang de l\'utilisateur')}}
            {{Form::text('id_Rang_Utilisateur', $users->id_Rang_Utilisateur)}}
            {{--{{Form::text('id_Rang_Utilisateur', $users->rang_utilisateur->intitule)}}--}}

            {{--<h2>{{$users->rang_utilisateur->intitule}}</h2>--}}

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