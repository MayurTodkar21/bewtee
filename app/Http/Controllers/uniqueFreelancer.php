<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Freelancer;


class uniqueFreelancer extends Controller
{
    //
    function getSpecific($id){
        if (Auth::check()) {
            // The user is logged in...
            
            $freelancer = Freelancer::find($id);
        
    
            return view('specificFreelancer' , ['freelancer'=> $freelancer, 'id' =>$id]);
        }else{
            
            
            return view('auth/login');
        }
        
        
        
        //return view('serviceshow',['services' =>$data]);

        
    }
}
