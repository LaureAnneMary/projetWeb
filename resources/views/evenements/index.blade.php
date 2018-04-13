@extends('layouts.app')
@include('inc.navbar')

@section('content')

    <h1>Evenements Proposés</h1>

    @if(count($evenements)>0)
        @foreach($evenements as $evenement)
            <div class="well">
                <h3><a href="/evenements/{{$evenement->id}}"> {{$evenement->libelle}}</a></h3>
                <small>Publier le {{$evenement->created_at}}</small>
            </div>
        @endforeach

    @else
        <p>Il n'y a pas d'evenements</p>
    @endif

@endsection