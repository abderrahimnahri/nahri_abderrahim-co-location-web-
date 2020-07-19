<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Demande;
use Auth;
class DemandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $demandes=Demande::All();
        $userId = Auth::id();
        return view('demandes', compact('demandes','userId'));
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
    public function store(Request $request)
    {
        $demande= new Demande();
        $demande->user_id=Auth::id();
        $demande->adresse=$request->input("adresse");
        $demande->description=$request->input("description");
        $demande->telephone=$request->input("telephone");
        $demande->budget_max=$request->input("budjet_max");
        $demande->save();
        return redirect('/alldemandes');
     

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $demande = Demande::find($id);
        return view('home', compact('demande'));
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
        $demande = Demande::find($id);
        $demande->adresse=$request->input("adresse");
        $demande->description=$request->input("description");
        $demande->telephone=$request->input("telephone");
        $demande->budget_max=$request->input("budjet_max");
        $demande->save();
        return redirect('/alldemandes');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $demande = Demande::find($id);
        $demande->delete();
        return redirect('/alldemandes');

    }
}
