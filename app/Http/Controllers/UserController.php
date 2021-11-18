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
        $size = $req->file('file')->getSize();
        $name = $req->file('file')->getClientOriginalName();

        $size2 = $req->file('img2')->getSize();
        $name2 = $req->file('img2')->getClientOriginalName();

        $size3 = $req->file('img3')->getSize();
        $name3 = $req->file('img3')->getClientOriginalName();

        $size1 = $req->file('img1')->getSize();
        $name1 = $req->file('img1')->getClientOriginalName();

        

        $req->file('file')->storeAs('public/freelancers/',$name);
        $req->file('img1')->storeAs('public/freelancers/',$name1);
        $req->file('img2')->storeAs('public/freelancers/',$name2);
        $req->file('img3')->storeAs('public/freelancers/',$name3);
        
       
        $freelancer = new Freelancer;
        $freelancer->profilePhote = $name;
        $freelancer->size = $size;
        $freelancer->img1 = $name1;
        $freelancer->img2 = $name2;
        $freelancer->img3 = $name3;
        $freelancer->size1= $size1;
        $freelancer->size2= $size2;
        $freelancer->size3= $size3;
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
