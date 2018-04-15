<!DOCTYPE html>

<html>

<head>

    <title>Utilisateurs</title>

</head>

<body>

<h1>Utilisateurs</h1>

<ul>

    @foreach($users as $user)
        <div>{{ $user->prenom}}</div>
    @endforeach

</ul>

</body>

</html>