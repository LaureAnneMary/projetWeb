@extends('template')
@section('headtop')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">--}}
    @endsection

@section('script')
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    @endsection
@section('content')


    <a href="/" class="btn btn-primary" >Retour</a>
    <button type="button" class="btn btn-primary">télécharger de la liste des inscrits</button>
    <h1>Evenements du mois</h1>

    @if(count($evenementsValider)>0)
        @foreach($evenementsValider as $evenementValider)
            <div class="well">
                <h3><a href="/evenementsValider/{{$evenementValider->id}}"> {{$evenementValider->libelle}}</a></h3>
                <p><img width="200" src="{{asset('images/'.$evenementValider->urlPhotoPrincipale)}}"/> </p>
                <small>Publier le {{$evenementValider->created_at}}</small>
            </div>
        @endforeach

    @else
        <p>Il n'y a pas d'evenements</p>
    @endif
@endsection
