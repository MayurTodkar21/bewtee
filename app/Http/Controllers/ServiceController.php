<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Service;
use App\Models\User;


class ServiceController extends Controller
{
    //
    function addDetail(Request $req){
        $user= Auth::user();
        $path =$req->file('file')->store('storage');
        $service = new Service;
        $service->serviceImg = $path;
        $service->title = $req->title;
        $service->about = $req->about;
        $service->serveCat = $req->servCat;
        $service->location = $req->location;
        $service->policy = $req->policy;
        $service->product = $req->product;
        $service->price = $req->price;
        $service->discount = $req->discount;
        $service->member_id= $user->id;
        $service->save();
        return redirect('/dashboard');

        

    }
}
