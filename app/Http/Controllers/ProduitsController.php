<?php

namespace App\Http\Controllers;

use App\Produit;
use Illuminate\Http\Request;

class ProduitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produits=Produit::all();
        return view('produits.index')->with('produits',$produits);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produits.creer');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('permission');
        $this->validate($request,[
          'libelle'=>'required',
            'description' => 'required',
            'prix'=>'required'

        ]);
        $produit = new Produit;
        $produit->libelle = $request->input('libelle');
        $produit->description = $request->input('description');
        $produit->prix = $request->input('prix');
        $produit->save();
        return redirect('/produits')->with('success','Produit ajouter');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produit = Produit::find($id);
        return view('produits.details')->with('produit',$produit);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->authorize('permission');
        $produit = Produit::find($id);
        return view('produits.modifier')->with('produit',$produit);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->authorize('permission');
        $produit = Produit::find($id);
        $this->validate($request,[
           'libelle'=>'required',
            'description'=>'required',
            'prix'=>'required',

        ]);
        $produit->libelle = $request->input('libelle');
        $produit->description=$request->input('description');
        $produit->prix=$request->input('prix');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('permission');
        $produit = Produit::find($id);
        $produit->delete();
        return redirect('/produits')->with('success', 'Produit supprimer');
    }
}
