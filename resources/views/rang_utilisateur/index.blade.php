<!DOCTYPE html>

<html>

<head>

    <title>rang utilisateur</title>

</head>

<body>

<h1>Utilisateurs</h1>

<ul>

    @foreach($tasks as $task)

        <li>{{ $task->body }}</li>

    @endforeach

</ul>

</body>

</html>