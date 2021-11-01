<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\Message;

class ViewMessageController extends Controller
{
    //
    function viewMessage(){
        $user = Auth::user();
        $message= DB::table('messages')->where('name' ,'=', $user['name'])->get();
        
        return view('viewmessage', ['messages'=>$message]);
    }
    function deleteMessage($id){
        $data = Message::find($id);
        $data->delete();
        return redirect('/viewmessage');

    }
}
