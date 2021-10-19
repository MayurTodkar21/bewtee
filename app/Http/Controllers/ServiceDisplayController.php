<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceDisplayController extends Controller
{
    //
    function displayService(){
        $data= Service::all();
        return view('serviceshow',['services' =>$data]);
    }
}
