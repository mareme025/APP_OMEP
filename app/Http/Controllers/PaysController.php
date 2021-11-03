<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use WisdomDiala\Countrypkg\Models\Country;
use WisdomDiala\Countrypkg\Models\State;

class PaysController extends Controller
{
  public function showPays()
    {
        $countries = Country::all();
        return view('pays/country',compact('countries'));
    } 

    public function getState()
    {
        $countries = Country::all();
        return view('getState',compact('state'));
    } 

    public function getStates()
    {
        $country_id = request('country');
      $states = State::where('country_id',$country_id)->get();
       $option ="<option value=''>Select state</option>";
       foreach($states as $state)
       {
          $option .= '<option value="'.$state->name.'">'.$state->name.'</option>';
       }
       return $option;
    }

    public function storePays(Request $req)
    {
        $data = new Country();
        $nomFichier = $req->nomFichier;
       
    }
}
