@extends('layouts.app')

@section('content')
    <a href="/evenementsValider" class="btn btn-primary" >Retour</a>

    <h1>{{$evenementValider->libelle}}</h1>
    <div>
        {{$evenementValider->description}}
    </div>
    <div>
        <p>{{$evenementValider->prix}} €</p>
    </div>
    <div>
        {{$evenementValider->urlPhotoPrincipale}}
    </div>
    <hr>
    <small>Poster le {{$evenementValider->created_at}}</small>