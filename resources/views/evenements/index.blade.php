@extends('template')

{{--@include('inc.navbar')--}}

@section('content')

    <h1>Evenements Proposés</h1>

    @if(count($evenements)>0)
        @foreach($evenements as $evenement)
            <div class="well">
                <h3><a href="/evenements{{$evenement->id}}"> {{$evenement->libelle}}</a></h3>
                <p><img width="200" src="{{asset('images/'.$evenement->urlPhotoPrincipale)}}"/> </p>
                <small>Publier le {{$evenement->created_at}}</small>
            </div>
        @endforeach

    @else
        <p>Il n'y a pas d'evenements</p>
    @endif

@endsection