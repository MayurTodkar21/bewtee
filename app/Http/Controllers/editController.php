<?php

namespace App\Http\Controllers;

use App\Models\Freelancer;
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

    function updateData(Request $req){
        $user= Auth::user();
        
        $path =$req->file('file')->store('docs');
        $freelancer= Freelancer::find($req->id);
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
        
        $freelancer->member_id= $user->id;
        $freelancer->save();
        
        return redirect('/dashboard');
        
    }

}
