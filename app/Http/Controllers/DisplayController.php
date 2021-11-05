<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Freelancer;
use Illuminate\Support\Facades\Auth;

class DisplayController extends Controller
{
    //
    //controller to display data 
    function display(){
        $user=Auth::user();
        $data= Freelancer::all();
        //$reviewData= Review::all();
        
        return view('display',['freelancers' =>$data, 'user' =>$user]);//, 'reviews' =>$reviewData]);
    }
}
