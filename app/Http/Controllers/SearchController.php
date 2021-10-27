<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    //
    function search(Request $req){
        $searchInput = $req->search;
        $freelancer= DB::table('freelancers')->where('name' ,'=', $searchInput)->orWhere('typeIn', '=', $searchInput)->orWhere('location' , '=' , $searchInput)->get();
        
        return view('searchresults', ['freelancer' => $freelancer ]);
    }
    function searchService(Request $req){
        $searchInput = $req->search;

        $service=  DB::table('services')->where('location', '=', $searchInput)->get();
        return view('servicesearch', ['services' => $service]);


    }
   
}
