<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    //
    function addReview(Request $req){
        $review = new Review;
        $review->overall = $req->overall;
        $review->onTime= $req->onTime;
        $review->message=$req->message;
        $review->save();
        return redirect('/');
    }
}
