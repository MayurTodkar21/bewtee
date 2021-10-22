<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use App\Models\Service;

class particularService extends Controller
{
    //
    function getService($id){
        $service = Service::find($id);
        $sno = $id;
        $review = Review::find($id);
        return view('specificService', ['service' =>$service, 'id' =>$id , 'review' => $review]);
    }
}
