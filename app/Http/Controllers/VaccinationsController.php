<?php

namespace App\Http\Controllers;

use App\Models\vaccinations;
use Illuminate\Http\Request;
use WisdomDiala\Countrypkg\Models\Country;

class VaccinationsController extends Controller
{
   public function list()
   {
    $vaccins = vaccinations::all();

    return view('couverturesvaccinales/tableautaux',[
        'vaccins'=>$vaccins
    ]);
   }

   public function store()
   {
       
       $vaccin = request('vaccin');
       $especes = request('especes');
       $effectifsTotal = request('effectifsTotal');
       $totalAVacciner = request('totalAVacciner');
       $effectifsVaccines = request('effectifsVaccines');
       $country_id = request('country_id');
       $annee = request('annee');
 
       $vaccins = new vaccinations();

       $vaccins->vaccin = $vaccin;
       $vaccins->especes = $especes;
       $vaccins->effectifsTotal = $effectifsTotal;
       $vaccins->totalAVacciner = $totalAVacciner;
       $vaccins->effectifsVaccines = $effectifsVaccines;
       $vaccins->country_id = $country_id;
       $vaccins->annee = $annee;

       $vaccins->save();

       return back();
   }
   public function voirPays()
    {
        $countries = Country::all();
        return view('insertiontaux.insertiontaux',compact('countries'));
    } 

    public function rechercheTaux(Request $req) 
    {
        $recherche_pays = $req->get('query');
        $vaccins = vaccinations::where('country_id','LIKE','%'.$recherche_pays.'%')->groupBy('country_id')->get();
       // dd($data);
       return view('recherchetaux.recherchetaux',compact('vaccins'));
    }
    public function resultatRechercheTaux(Request $req) 
    {
        $recherche_pays = $req->get('query');
        $vaccins = vaccinations::where('country_id','LIKE','%'.$recherche_pays.'%')->get();
       // dd($vaccins);
       return view('couverturesvaccinales/tableautaux',compact('vaccins'));
    }
}
