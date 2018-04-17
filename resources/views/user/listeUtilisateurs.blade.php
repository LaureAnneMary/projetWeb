@foreach($users as $user)
    <p>{{ $user->id }} : {{ $user->prenom }} : {{ $user->id_Rang_Utilisateur }}</p>
@endforeach