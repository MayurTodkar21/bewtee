<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Freelancer;
use App\Models\Service;
use Illuminate\Support\Facades\DB;
class uniqueFreelancer extends Controller
{
    //
    function getSpecific($id){
        if (Auth::check()) {
            // The user is logged in...
            
            $freelancer = Freelancer::find($id);
            $user = Auth::user();
            $serviceId = $freelancer->member_id;
            $services = DB::table('services')->where('member_id','=',$serviceId)->get();
            $reviews = DB::table('reviews')->where('id' ,'=', $id)->get();
           if($services -> isEmpty()){
               return view('addService');
           }else{
        
            return view('specificFreelancer' , ['freelancer'=> $freelancer, 'id' =>$id, 'user' => $user, 'services'=>$services, 'reviews' => $reviews]);
           }
        }else{
            
            
            return view('auth/login');
        }
        
        
        
        //return view('serviceshow',['services' =>$data]);

        
    }
}
