<?php

namespace App\Http\Controllers;

use App\Models\fichier;
use App\Models\test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use WisdomDiala\Countrypkg\Models\Country;

class UploadController extends Controller
{
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

    public function voir($id)
    {
        $data= fichier::find($id);
        dd($data);
        //return view('performances.performance',compact('data'));
    }

    public function Pays()
    {
       $countries = Country::all();
        $test = test::all();
        return view('fichiers/upload',compact('countries','test'));
    } 

    public function afficheFichier($id)
    {
        $data = test::find($id);

         return view('fichiers.voirFichier',compact('data'));
    }

}
