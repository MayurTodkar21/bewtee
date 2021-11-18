<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Service;
use App\Models\Job;

class ServiceDisplayController extends Controller
{
    //
    function displayService(){
        $user = Auth::user();
        $data= Service::all();
        return view('serviceshow',[ 'user'=>$user], compact('data'));
    }

    function viewJobs(){
        $data = Job::all();
        return view('viewjobs', ['jobs' => $data]);
    }
}
