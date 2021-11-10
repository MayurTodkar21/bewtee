<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Models\Service;
use Illuminate\Support\Facades\Auth;

class particularService extends Controller
{
    //
    function getService($id){
        $user = Auth::user();
        $service = Service::find($id);
        $sno = $id;
        $reviews = DB::table('reviews')->where('id' ,'=', $id)->get();
        return view('specificService', ['service' =>$service, 'id' =>$id , 'reviews' => $reviews, 'user' => $user]);
    }
}
