<?php

namespace App\Http\Controllers;

use App\Models\fichier;
use App\Models\performance;
use Illuminate\Http\Request;
use WisdomDiala\Countrypkg\Models\Country;

class PerformanceController extends Controller
{
    public function insertionPerformance(Request $req)
    {
        $performance = new performance();
        $performance->fichier=$req->fichier;
        
        $fichier = $req->fichier;
       
        $filename=$fichier->getClientOriginalName();
        $req->fichier->move('documents',$filename);
        $performance->fichier=$filename;
        
        $performance->country_id=$req->country_id;
        $performance->annee=$req->annee;
        $performance->save();
        return back();
        
    }

    public function voirPaysAnnee()
    {
        $data =  performance::all();
        $pays = Country::all();
        return view('performances.insertion',compact('data','pays'));
    }

    public function rechercheFichier(Request $req) 
    {
        $recherche_pays = $req->get('query');
        $recherche_annee = $req->get('annee');
        $data = performance::where('country_id','LIKE','%'.$recherche_pays.'%')->get();
        $data = performance::where('annee','LIKE','%'.$recherche_annee.'%')->get();
       // dd($data);
       return view('recherche.recherchefichier',compact('data'));
    }
    public function resultatRecherche(Request $req) 
    {
        $recherche_pays = $req->get('query');
        $recherche_annee = $req->get('annee');
        $data = performance::where('country_id','LIKE','%'.$recherche_pays.'%')->get();
        $data = performance::where('annee','LIKE','%'.$recherche_annee.'%')->get();
        //dd($data);
       return view('pays.resultatrecherche',compact('data'));
    }
    public function show()
    {
        $data = fichier::all();
        return view('fichiers/upload',compact('data'));
    }
    public function storeFichier(Request $req)
    {

        $data = new fichier();
        $nomFichier = $req->nomFichier;
       
        $filename=$nomFichier->getClientOriginalName();
        $req->nomFichier->move('documents',$filename);
        $data->nomFichier=$filename;

        $data->save();
        return redirect()->back();

    }
    public function download($nomFichier)
    {
        return response()->download('documents/'.$nomFichier);
    }

    public function voirFichier($id)
    {
        $data= fichier::find($id);

        return view('performances.performance',compact('data'));
    }
    public function showPays()
    {
        $countries = Country::all();
        return view('pays/country',compact('countries'));
    } 

}
