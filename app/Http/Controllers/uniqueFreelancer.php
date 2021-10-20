<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Freelancer;


class uniqueFreelancer extends Controller
{
    //
    function getSpecific($id){
        
        
        $freelancer = Freelancer::find($id);
        
    
        return view('specificFreelancer' , ['freelancer'=> $freelancer, 'id' =>$id]);
        //return view('serviceshow',['services' =>$data]);

        
    }
}
