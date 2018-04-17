<!DOCTYPE html>

<html>

<head>

    <title>Utilisateurs</title>

</head>

<body>
<ul>
    <h1>Utilisateurs</h1>

    @if(count($users)>0)
        @foreach($users as $user)
            <div class="well">
                <h3><a href="/users/{{$user->id}}">{{$user->prenom}} {{$user->nom}}</a></h3>
            </div>
        @endforeach
    @else
        <p>Pas d'utilisateurs</p>
    @endif

</ul>
</body>

</html>