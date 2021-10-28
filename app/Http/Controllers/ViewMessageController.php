<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class ViewMessageController extends Controller
{
    //
    function viewMessage(){
        $user = Auth::user();
        $message= DB::table('messages')->where('name' ,'=', $user['name'])->get();
        
        return view('viewmessage', ['messages'=>$message]);
    }
}
