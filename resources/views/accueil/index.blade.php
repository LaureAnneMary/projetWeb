@extends('template')
@section('content')

    <h1>Accueil</h1>

    @if(count($photos)>0)
        @foreach($photos as $photo)
            <p class="well">
                <h3><a href="/{{$photo->id}}"> {{$photo->url}}</a></h3>
                <p><img width="400" src="{{asset('images/'.$photo->url)}}"/> </p>
            <p>Actualité de l'événement <strong><a href="/evenements/{{$photo->evenement->id}}">{{$photo->evenement->libelle}}</a></strong></p>
        @endforeach

    @else
        <p>Il n'y a pas de photos</p>
    @endif

@endsection