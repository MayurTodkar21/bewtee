<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Booking;

class BookingController extends Controller
{
    //
    function bookService($id){
        $service = Service::find($id);
        $user = Auth::user();

        return view('booking', ['service' => $service, 'user'=>$user]);

    }

    function book(Request $req){
        $booking = new Booking;
        $booking->dateNtime = $req->appointment;
        $booking->userid = $req->userid;
        $booking->username= $req->username;
        $booking->serviceid = $req->serviceid;
        $booking->servicename= $req->servicename;
        $booking->save();
        return redirect ('/success');
    }
}
