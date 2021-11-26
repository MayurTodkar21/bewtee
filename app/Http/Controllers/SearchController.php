<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    //
    function search(Request $req){
        $user= Auth::user();
        $searchInput = $req->search;
        $freelancer= DB::table('freelancers')->where('name' ,'=', $searchInput)->orWhere('typeIn', '=', $searchInput)->orWhere('location' , '=' , $searchInput)->get();
        
        return view('searchresults', ['freelancer' => $freelancer, 'user' => $user ]);
    }
    function searchService(Request $req){
        $searchInput = $req->search;
        $user= Auth::user();
        $service=  DB::table('services')->where('location', '=', $searchInput)->orWhere('title' , '=', $searchInput)->get();
        return view('servicesearch', ['services' => $service, 'user' => $user ]);


    }
   
}
