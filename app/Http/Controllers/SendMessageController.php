<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Freelancer;
use Illuminate\Support\Facades\Auth;
use App\Models\Message;
use App\Models\User;


class SendMessageController extends Controller
{
    //
    function sendMessage(Request $req){
        
        $message = new Message;
        $message->name = $req->name;
        $message->message= $req->message;
        $message->freelancer_id = $req->freelancer_id;
        $message->client_id = $req->client_id;
        $message->sender = $req->sender;
        $message->save();
        return redirect('/success');
    }

    function sendReply(){}
}
