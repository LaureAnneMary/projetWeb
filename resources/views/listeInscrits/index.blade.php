@extends('template')

{{--@include('inc.navbar')--}}

@section('content')

    <h1>Mes événements</h1>
{{--@php(dd($evenementValider->userInscription))--}}
    @foreach($evenementValider->userInscription as $e)
        {{ $e->prenom }}
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