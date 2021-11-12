<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Freelancer;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    //
    function getData(Request $req)
    {
        $user= Auth::user();
        
        $path =$req->file('file')->store('storage');
        $freelancer = new Freelancer;
        $freelancer->profilePhote = $path;
        $freelancer->name = $user->name;
        $freelancer->typeIn = $req->typeIn;
        $freelancer->tagline = $req->tagline;
        $freelancer->location= $req->location;
        $freelancer->category = $req->category;
        $freelancer->skills = $req->skills;
        $freelancer->experience = $req->experience;
        $freelancer->travel = $req->travel;
        $freelancer->productUsed = $req->productUsed;
        $freelancer-> fnq= $req->fnq;
        //$freelancer->onTime = $req->onTime;
        $freelancer->member_id= $user->id;
        $freelancer->save();
        
        return redirect('/dashboard');
        





    }
}
