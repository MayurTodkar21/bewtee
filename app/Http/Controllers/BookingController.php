<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    //
    function bookService($id){
        $service = Service::find($id);
        $user = Auth::user();

        return view('booking', ['service' => $service, 'user'=>$user]);

    }

    function book(Request $req){
        return ($req);
    }
}
