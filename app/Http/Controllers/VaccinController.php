<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ville;
use App\Models\Hopital;
use App\Models\Rendezvou;

class VaccinController extends Controller
{
	public function ville(){
		$ville=Ville::all();
		return view('ville',['ville'=>$ville]);
		
	}
	public function choisirVille($id){
		$ville=Ville::find($id);
		$hopital=Hopital::where('ville_id',$ville->id)->first()->get();
		//$hopital=Hopital::all();
		//$hopital=Hopital::where('ville_id',$id);
		return view('choisirVille',['hopital'=>$hopital]);	
	}
	public function choisirHopital(){
		return view('formulaireClient');
	}
	public function store(Request $request){
		$rndv=new Rendezvou();
		if ($request->input('age')>'18') {
			$rndv->id=$request->input('cne');
			$rndv->nom=$request->input('nom');
			$rndv->prenom=$request->input('prenom');
			$rndv->age=$request->input('age');
			$rndv->numero=$request->input('telephone');
			$rndv->etat_physique=$request->input('etat');
			$rndv->save();
		}
	}
    
}
