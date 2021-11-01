<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Freelancer;
use App\Models\Message;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class Homecontroller extends Controller
{
    //
    function sendMessage($id){
        $user = Auth::user();
        $Freelancer = Freelancer::find($id);

        return view('message', ['user' => $user, 'freelancer' => $Freelancer]);
    }
    function sendReply($id){
        
        $message = Message::find($id);
        return view('reply', ['message' => $message]);
    }
}

