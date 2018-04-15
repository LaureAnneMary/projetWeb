@extends('layouts.app')
@section('content')

    <h1>Evenements du mois</h1>

    @if(count($evenementsValider)>0)
        @foreach($evenementsValider as $evenementValider)
            <div class="well">
                <h3><a href="/evenements/{{$evenementValider->id}}"> {{$evenementValider->libelle}}</a></h3>
                <small>Publier le {{$evenementValider->created_at}}</small>
            </div>
        @endforeach

    @else
        <p>Il n'y a pas d'evenements</p>
    @endif

@endsection