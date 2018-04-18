@extends('template')

@section('content')
    <a href="/produits">Retour</a>
    <h1>{{$produit->libelle}}</h1>
    <div>
        <p>Description:</p>
        {{$produit->description}}
    </div>
    <div>
        <p>Prix:</p>
        {{$produit->prix}} €
    </div>
    <p><img width="600" src="{{asset('images/'.$produit->image)}}"/> </p>
    @can('permission')
    <a href="/produits/{{$produit->id}}/edit" class="btn btn-default"> Modifier</a>
    @endcan
        <button>Ajout Panier</button>

    @can('permission')
    {!!Form::open(['action'=>['ProduitsController@destroy',$produit->id],'method'=>'POST', 'class'=> 'pull-right'])!!}
    {{Form::hidden('_method','DELETE')}}
    {{Form::submit('Supprimer',['class'=>'btn btn-danger'])}}
    {!!Form::close()!!}
    @endcan

@endsection