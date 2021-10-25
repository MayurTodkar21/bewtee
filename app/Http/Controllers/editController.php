<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class editController extends Controller
{
    //
    function editData(){
       $user = Auth::user();
       $freelancer= DB::table('freelancers')->where('member_id' ,'=', $user['id'])->get();
       
       
       
        return view('edit', ['user' => $user, 'freelancer' => $freelancer ]);
    }
}
