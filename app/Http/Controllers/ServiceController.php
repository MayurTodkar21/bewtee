<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Service;
use App\Models\User;
use App\Models\Job;


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
    function addJob(Request $req){
        $job = new Job;
        $job->username = $req->username;
        $job->user_id = $req->userid;;
        $job->title = $req->title;
        $job->level = $req->level;
        $job->duration=$req->duration;
        $job->type = $req->type;
        $job->English_level = $req->EnglishLevel;
        $job->location = $req->Location;
        $job->job_type = $req->jobType;
        $job->min_price = $req->minPrice;
        $job->max_price = $req->maxPrice;
        $job->detail = $req->detail;
        $job->save();
        return redirect('/success');
        
        
    }
    
}
