<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Freelancer;

class DisplayController extends Controller
{
    //
    //controller to display data 
    function display(){
        $data= Freelancer::all();
        //$reviewData= Review::all();
        
        return view('display',['freelancers' =>$data]);//, 'reviews' =>$reviewData]);
    }
}
