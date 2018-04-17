{{--<!DOCTYPE html>--}}

{{--<html>--}}

{{--<head>--}}
    {{--<meta charset="utf-8"/>--}}

    {{--<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}"/>--}}
    {{--<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"/>--}}
    {{--<link href='//netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' rel='stylesheet'/>--}}
    {{--<script src="http://code.jquery.com/jquery-latest.js"></script>--}}
    {{--<script src="{{asset('js/query.easyPaginate.js')}}"></script>--}}
    {{--<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">--}}
    {{--<script src="//code.jquery.com/jquery-latest.min.js"></script>--}}
    {{--<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>--}}
    {{--<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>--}}
    {{--<title>Site BDE Bordeaux</title>--}}
    {{--<title>Utilisateurs</title>--}}

{{--</head>--}}

{{--<body>--}}
{{--<ul>--}}
    {{--<h1>Utilisateurs</h1>--}}

    {{--@if(count($users)>0)--}}
        {{--@foreach($users as $user)--}}
            {{--<div class="well">--}}
                {{--<h3><a href="/users/{{$user->id}}">{{$user->prenom}} {{$user->nom}}</a></h3>--}}
            {{--</div>--}}
        {{--@endforeach--}}
    {{--@else--}}
        {{--<p>Pas d'utilisateurs</p>--}}
    {{--@endif--}}

{{--</ul>--}}
{{--</body>--}}

{{--</html>--}}


@extends('template')

@section('content')
    <button type="button" id="btn-clck1">Sélectionner étudiants</button>
    <button type="button" id="btn-clck2">Sélectionner employés CESI</button>
    <button type="button" id="btn-clck3">Sélectionner membres BDE</button>
    <div id="easyPaginate">
        @include('user.listeUtilisateurs')
    </div>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="{{asset('js/jquery.easyPaginate.js')}}"></script>
    <script>
        $('#easyPaginate').easyPaginate({
            paginateElement: 'p',
            elementsPerPage: 5,
            effect: 'climb'
        });
    {{--</script>--}}

    {{--<script>--}}
        $(document).ready(function(){
            function filter(e){
                $.ajax({
                    type:'POST',
                    url:'/users?ajaxid=4',
                    data: {
                        filterParameter: e.data.filterParam
                    },
                    // cache: false,
                                        {{--data: { _token: '{{csrf_token()}}' },--}}
                    success: function (data) {
                        $('.easyPaginateNav').remove();
                        $("#easyPaginate").html(data);
                        $('#easyPaginate').easyPaginate({
                            paginateElement: 'p',
                            elementsPerPage: 5,
                            effect: 'climb'
                        });
                    },
                    error: function (data, textStatus, errorThrown) {
                        console.log(e.data.filterParam);
                        console.log(data);
                        console.log(errorThrown);
                    },
                });
            }
            $("#btn-clck1").bind("click",{filterParam: "students"}, filter);
            $("#btn-clck2").bind("click",{filterParam: "employees"}, filter);
            $("#btn-clck3").bind("click",{filterParam: "members"}, filter);
        });
    </script>
    @endsection
{{--</ul>--}}
{{--</body>--}}

{{--</html>--}}