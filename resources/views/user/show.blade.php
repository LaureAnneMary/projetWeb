<!DOCTYPE html>

<html>

<head>

    <title>Utilisateurs</title>

</head>

<body>

    <h1>{{$users->nom}} {{$users->prenom}}</h1>
    <small>Créé le {{$users->created_at}}</small>
<div>
    {{--<@php(var_dump($users->intitule))>--}}
    {{--<@php(die())>--}}

    <h2>{{$users->rang_utilisateur->intitule}}</h2>
</div>

</body>

</html>