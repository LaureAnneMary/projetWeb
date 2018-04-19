@extends('template')



@section('headtop')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
@endsection



@section('content')
    @can('permission')
    <a href="/produits/create" >Ajouter un produit</a>
    @endcan

    <h1>Bienvenue dans la Boutique du BDE</h1>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img class="d-block w-100" src="/images/pullG.jpg" data-src="holder.js/900x400?theme=social" alt="900x400" style="width: 900px; height: 400px;" data-holder-rendered="true">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/images/mugcesi.jpg" data-src="holder.js/900x400?theme=industrial" alt="900x400" style="width: 900px; height: 400px;" data-holder-rendered="true">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/images/coquecesi.jpg" data-src="holder.js/900x400?theme=industrial" alt="900x400" style="width: 900px; height: 400px;" data-holder-rendered="true">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/images/pullR.jpg" data-src="holder.js/900x400?theme=industrial" alt="900x400" style="width: 900px; height: 400px;" data-holder-rendered="true">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    @if(count($produits)>0)
    @foreach($produits as $produit)
        <div>
            <h3><a href="/produits/{{$produit->id}}}">{{$produit->libelle}}</a></h3>
            <p>{{$produit->description}}</p>
            <p><img width="400" src="{{asset('images/'.$produit->image)}}"/> </p>
            <p>Prix :{{$produit->prix}}</p>
        </div>
    @endforeach
    @endif



    @endsection


@section('script')
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    @endsection