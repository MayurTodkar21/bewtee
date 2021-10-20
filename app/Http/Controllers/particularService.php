<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class particularService extends Controller
{
    //
    function getService($id){
        $service = Service::find($id);
        return view('specificService', ['service' =>$service, 'id' =>$id]);
    }
}
