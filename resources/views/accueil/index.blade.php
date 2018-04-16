@extends('layouts.app')
@section('content')

    <h1>Accueil</h1>

    @if(count($photos)>0)
        @foreach($photos as $photo)
            <div class="well">
                <h3><a href="/accueil/{{$photo->id}}"> {{$photo->url}}</a></h3>
                <p>Correspond à l'événement <strong>{{$photo->evenement->libelle}}</strong></p>
                <small>Poster le {{$photo->created_at}}</small>
            </div>
        @endforeach

    @else
        <p>Il n'y a pas d'evenements</p>
    @endif

@endsection