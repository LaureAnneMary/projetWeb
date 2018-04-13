@extends('layouts.app')

@section('content')
    <a href="/evenements" >Retour</a>

    <h1>{{$evenement->libelle}}</h1>
    <div>
        {{$evenement->description}}
    </div>
    <div>
        <p>{{$evenement->prix}} €</p>
    </div>
    <div>
        {{$evenement->urlPhotoPrincipale}}
    </div>
    <hr>
    <small>Poster le {{$evenement->created_at}}</small>

@endsection