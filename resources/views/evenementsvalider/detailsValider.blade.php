@extends('template')

@section('content')
        {{--<!DOCTYPE html>--}}

{{--<html>--}}

{{--<head>--}}

    {{--<title>Evenements</title>--}}

{{--</head>--}}

{{--<body>--}}
    <a href="/evenementsValider" class="btn btn-primary" >Retour</a>

    <h1>{{$evenementValider->libelle}}</h1>

        <p>{{$evenementValider->description}}</p>

        <p>{{$evenementValider->prix}} €</p>

        <p>{{$evenementValider->urlPhotoPrincipale}}</p>

    <hr>
    {{--<button type="submit">Inscription</button>--}}
    {!!Form::open(['action'=> ['EvenementsValiderController@store', $evenementValider->id], 'method' => 'POST']) !!}
        {{Form::hidden('_method', 'POST')}}
        {{Form::submit("Inscription")}}
    {!!Form::close() !!}

    {{--<form method="POST">--}}
        {{--<input id="id_Evenement" name="id_Evenement" value="{{ $evenementValider->id }}" type="hidden">--}}
        {{--<input type="submit" name="inscription" value="S'inscrire">--}}
    {{--</form>--}}

    {{--<form action=('EvenementsValider@store')>--}}
    {{--<input type="submit" value="Inscription" />--}}
    {{--</form>--}}

    <hr>
    <small>Poster le {{$evenementValider->created_at}}</small>
@endsection
{{--</body>--}}

{{--</html>--}}