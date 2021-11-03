<?php

namespace App\Http\Controllers;

use App\Models\test;
use Illuminate\Http\Request;
use WisdomDiala\Countrypkg\Models\Country;
use WisdomDiala\Countrypkg\Models\State;

class TestController extends Controller
{
    public function showCountry()
    {
        $countries = Country::all();
        return view('pays/country',compact('countries'));
    }  

    public function insertTest(Request $req)
    {
        $test = new test();
        $test->fichier=$req->fichier;
        
        $fichier = $req->fichier;
       
        $filename=$fichier->getClientOriginalName();
        $req->fichier->move('documents',$filename);
        $test->fichier=$filename;
        
        $test->country_id=$req->country_id;
        $test->annee=$req->annee;
        $test->save();
        return back();

    }   
    
   public function afficheTest()
    {
        $data =  test::all();
        $pays = Country::all();
        return view('pays.test',compact('data','pays'));
        
    }

    public function __construct()
    {
        $this->middleware('auth'); 
    }
    
    public function connectAdmin()
    {
        return view('admin.loginAdmin');

    }

    public function connectUser()
    {
        return view('user.loginUser');
        
    }

}
