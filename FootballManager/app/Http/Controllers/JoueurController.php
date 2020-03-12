<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Joueur;
use View;



class JoueurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $joueurs =  Joueur::all();
		return View::make('joueurs', compact('joueurs'));
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
	
		$prefixe_nom = ["nau","lan","ger","bou"];
		$suffixe_nom = ["nau","lan","ger","bou"];
		$prefixe_prenom = ["ar","vel","se","bou"];
		$suffixe_prenom = ["nau","lan","ger","bou"];
        // Validate the request...

		for($i=0; $i<$request->nb;$i++){
			
		
        $joueur = new Joueur;
		
        for($i=1;$i<rand(1,3);$i++) $joueur->nom .= $prefixe_nom[rand(0, count($prefixe_nom)-1)];//"test$i";//$request->nom;	
		for($i=1;$i<rand(1,3);$i++) $joueur->nom .= $suffixe_nom[rand(0, count($suffixe_nom)-1)];
		for($i=1;$i<rand(1,3);$i++) $joueur->prenom .= $prefixe_prenom[rand(0, count($prefixe_prenom)-1)];	
		for($i=1;$i<rand(1,3);$i++) $joueur->prenom .= $suffixe_prenom[rand(0, count($suffixe_prenom)-1)];
		//$joueur->prenom = $prefixe_prenom[rand(0, count($prefixe_prenom)-1)] . $suffixe_prenom[rand(0, count($suffixe_prenom)-1)];//"test$i";//$request->prenom;
		$joueur->age = 0;
		$joueur->tir = 0;
		$joueur->passe = 0;
		$joueur->technique = 0;
		$joueur->placement = 0;
		$joueur->vitesse = 0;
		$joueur->tacle = 0;
		$joueur->passe = 0;
		$joueur->arret = 0;
		$joueur->forme = 0;
		$joueur->endurance = 0;
		$joueur->noteGlobale = 0;
		$joueur->noteInstantanee = 0;	
		
		
        $joueur->save();
		}
		return redirect('joueurs');
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
        $joueur = Joueur::find($id); 
		$joueur->delete(); 
		
		return redirect('joueurs');
    }
}

