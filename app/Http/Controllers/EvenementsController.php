<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evenement;
use Illuminate\Support\Facades\Auth;
class EvenementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //$evenements = Evenement::all();
        $evenements=Evenement::where('id_Validation_Evenement','2')->get();
        return view('evenements.index')->with('evenements',$evenements);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('evenements.creer');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'libelle'=>'required',
            'urlPhotoPrincipale'=>'required',
            'description'=>'required',
            'prix'=>'required'
        ]);

        //créer un nouvel événement

        $evenement = new Evenement;
        $evenement->libelle = $request->input('libelle');
        $evenement->urlPhotoPrincipale = $request->input('urlPhotoPrincipale');
        $evenement->description = $request->input('description');
        $evenement->prix = $request->input('prix');
        $evenement->id_Users = Auth::user()->id;
        $evenement->save();

        return redirect('/evenements')->with('success','Evenement crée');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $evenement = Evenement::find($id);
        return view('evenements.details')->with('evenement', $evenement);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $evenement = Evenement::find($id);
        return view('evenements.modifier')->with('evenement', $evenement);
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
        $this->validate($request,[
            'urlPhotoPrincipale'=>'required',
            'description'=>'required',
            'dateEvenement'=>'required'
        ]);


        //créer un nouvel événement

        $evenement = Evenement::find($id);
        $evenement->urlPhotoPrincipale = $request->input('urlPhotoPrincipale');
        $evenement->description = $request->input('description');
        $evenement->dateEvenement = $request->input('dateEvenement');
        $evenement->save();

        return redirect('/evenements')->with('success','Evenement modifier');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $evenement=Evenement::find($id);
        $evenement->delete();
        return redirect('/evenements')->with('success','Evenement supprimer');
    }
}
