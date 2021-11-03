<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PresentationController extends Controller
{
    public function viewPresentation()
    {
        return view('presentations/presentation');
    } 
    public function viewCreationObservatoire()
    {
        
        return view('observatoires/creationObservatoire');
    } 
    public function viewObjectifs()
    {
        
        return view('objectifs/objectif');
    } 
    public function viewGouvernance()
    {
        
        return view('gouvernances/gouvernance');
    } 

    public function viewSanteAnimale()
    {
        
        return view('indicateurs/indicateur4');
    } 
}
