<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class BankingController extends Controller
{
    //
    function bankDetail(){
        
        $user = auth()->user();
       
        return view('bankingdetails', ['user' =>$user]);
    }
}
