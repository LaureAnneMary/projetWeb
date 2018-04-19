@extends('template')
@section('headtop')
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    @endsection

@section('content')

    <div class="boutons">
        <button type="button" id="btn-clck1" class='btn btn-link' style="width: 33%">Sélectionner étudiants</button>
        <button type="button" id="btn-clck2" class='btn btn-link' style="width: 33%">Sélectionner employés CESI</button>
        <button type="button" id="btn-clck3" class='btn btn-link' style="width: 33%">Sélectionner membres BDE</button>
        <form action="/users">
            <input type="submit" class='btn btn-link' style="width: 100%" value="Retour à la liste" />
        </form>
    </div>
    <div id="easyPaginate">
        @include('user.listeUtilisateurs')
    </div>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="{{asset('js/jquery.easyPaginate.js')}}"></script>
    <script>
        $('#easyPaginate').easyPaginate({
            paginateElement: 'p',
            elementsPerPage: 10,
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
                            elementsPerPage: 10,
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