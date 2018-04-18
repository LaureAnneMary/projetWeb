@foreach($users as $user)
    {{--    <p>{{ $user->id }} : {{ $user->prenom }} : {{ $user->id_Rang_Utilisateur }}</p>--}}
    <p><a href="/users/{{$user->id}}">{{$user->prenom}} {{$user->nom}}</a></p>
@endforeach