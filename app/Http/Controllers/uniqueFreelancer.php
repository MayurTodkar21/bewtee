<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Freelancer;

class uniqueFreelancer extends Controller
{
    //
    function getSpecific(){
        $data = Freelancer::all();

        return `{{$data->name}}`;
    }
}
