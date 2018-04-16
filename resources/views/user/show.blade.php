<!DOCTYPE html>

<html>

<head>

    <title>Utilisateurs</title>

</head>

<body>
    <a href="/users">Retour</a>
    <h1>{{$users->prenom}} {{$users->nom}}</h1>
    <small>Créé le {{$users->created_at}}</small>
<div>
    <h2>{{$users->rang_utilisateur->intitule}}</h2>
</div>

</body>

</html>