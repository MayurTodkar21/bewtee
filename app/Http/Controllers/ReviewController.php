<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Service;
use App\Models\Review;

class ReviewController extends Controller
{
    //
    function addReview(Request $req){
        
        $review = new Review;
        $review->overall = $req->overall;
        
        $review->message=$req->message;
        $review->id = $req->id;
      
        $review->save();
        return redirect('/serviceshow/');
    }
}
