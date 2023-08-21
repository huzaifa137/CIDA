<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class master extends Controller
{
    public function index(){
        return view('index');
    }

    public function about(){
        return view('about');
    }

    public function causes(){
        return view('causes');
    }

    public function events(){
        return view('event');
    }

    public function Blog(){
        return view('blog');
    }

    public function contact(){
        return view('contact');
    }


    // CAUSES

    public function Agriculture(){
        return view('Causes.Agriculture');
    }


    public function Health(){
        return view('Causes.Health');
    }

    public function Relief(){
        return view('Causes.ReliefProgram');
    }

    public function ReligiousEducation(){
        return view('Causes.ReligiousEducation');
    }

    public function BuildingMosques(){
        return view('Causes.BuildingMosques');
    }
    
    public function DAAWAH_RAMADAN_AND_QURBAN(){
        return view('Causes.DAAWAHRAMADANANDQURBAN');
    }

    public function EconomicEmpowerment(){
        return view('Causes.EconomicEmpowerment');
    }
    
}
