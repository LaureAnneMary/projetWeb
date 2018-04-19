@extends('template')
@section('headtop')
    <link href="{{ asset('css/style-desktop.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/skel-noscript.css') }}" rel="stylesheet">
@endsection

@section('content')

    <a href="/evenementsValider/{{$evenementValider->id}}?type=1" class="btn btn-primary" >Retour</a>

    <h1>Liste des inscrits</h1>
{{--@php(dd($evenementValider->userInscription))--}}
    @foreach($evenementValider->userInscription as $liste)
        <li>{{ $liste->prenom }} {{ $liste->nom }}</li>
    @endforeach


    {{--@if(count($evenements)>0)--}}
        {{--@foreach($evenements as $evenement)--}}
            {{--<div class="well">--}}
                {{--<p><img width="200" src="{{asset('images/'.$evenement->urlPhotoPrincipale)}}"/> </p>--}}
                {{--<small>Publier le {{$evenement->created_at}}</small>--}}
            {{--</div>--}}
        {{--@endforeach--}}

    {{--@else--}}
        {{--<p>Tu ne t'es inscrit à aucun événement.</p>--}}
    {{--@endif--}}

@endsection