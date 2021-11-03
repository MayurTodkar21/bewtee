<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Job;

class ServiceDisplayController extends Controller
{
    //
    function displayService(){
        $data= Service::all();
        return view('serviceshow',['services' =>$data]);
    }

    function viewJobs(){
        $data = Job::all();
        return view('viewjobs', ['jobs' => $data]);
    }
}
