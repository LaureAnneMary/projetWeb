<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evenement;
use DB;
use Illuminate\Support\Facades\Auth;

class EvenementsValiderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $evenementsValider=Evenement::where('id_Validation_Evenement','1')->where(DB::raw('MONTH(dateEvenement)'), '=', date('n'))->get();
        return view('evenementsvalider.index')->with('evenementsValider',$evenementsValider);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$idEvenementValid)
    {
        $evenementValider = Evenement::find($idEvenementValid);
        $id_Users = Auth::user()->id;

        $evenementValider->userInscription()->attach($id_Users);

       return redirect('/evenementsValider')->with('success', 'Tu es bien inscrit !');
//        return view('evenementsvalider.index')->with('evenementsValider',$evenementValider);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    public function show(Request $request, $n)
    public function show($id)

    {

        $evenementValider = Evenement::find($id);
//       dd($_GET);
        if ($_GET['type'] == 1) {
            return view('evenementsvalider.detailsValider')->with('evenementValider', $evenementValider);        } elseif ($_GET['type'] == 2){
        }

        if ($_GET['type'] == 2) {
            $this->authorize('permission');
            $evenementValider->userInscription()->get();

          return view('listeInscrits.index')->with('evenementValider',$evenementValider);
        }




    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
        $this->authorize('delete',$evenement);
        $evenement->delete();
        return redirect('/evenementsValider')->with('success','Evenement supprimer');

    }

}
