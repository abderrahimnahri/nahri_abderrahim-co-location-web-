<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Offre;
use Auth;

class MapsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locations =Offre::all();
    	return view('gmaps',compact('locations'));
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
        $request->validate([
            'prix' => 'required',
            'lat' => 'required',
            'lng' => 'required',
            'image'    => 'required',
            'image.*'  =>'image|mimes:jpeg,png,jpg|max : 2048'
        ]);

        if ($request->hasfile('image')){

            foreach($request->file('image') as $img){

                $name=$img->getClientOriginalName();
                $img->move(public_path().'/pictures/',$name);
                $data[]=$name;
               


            }

        }
        $offre = new Offre([
            //$commande->client_id = auth()->user()->id
            'user_id' =>1,
            'adresse' => $request->get('adresse'),
            'description' => $request->get('description'),
            'superficie' => $request->get('superficie'),
            'prix' => $request->get('prix'),
            'capacite' => $request->get('capacite'),
            'telephone' => $request->get('telephone'),
            'lat' => $request->get('lat'),
            'lng' => $request->get('lng'),
            'image' => json_encode($data),
            
        ]);


        
        $offre->save();
        return redirect('/gmaps');
        // $offre= new Offre();
        // $offre->user_id=Auth::id();
        // $offre->adresse=$request->input("adresse");
        // $offre->description=$request->input("description");
        // $offre->superficie=$request->input("superficie");
        // $offre->prix=$request->input("prix");
        // $offre->capacite=$request->input("capacite");
        // $offre->lat=$request->input("lat");
        // $offre->lng=$request->input("lng");  
         
        // $offre->image=json_encode($data);     
    }

    
    
    
    
     public function viewstore(Request $request,$lat,$lng)
    {
      print($lat);
      print($lng);
      
      return view('addoffres', compact('lat','lng'));
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
        //
    }
}
