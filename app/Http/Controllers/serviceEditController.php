<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Service;

class serviceEditController extends Controller
{
    //
    function editServiceData(){
        $user = Auth::user();
        $service = DB::table('services') -> where('member_id', '=', $user['id'])->get();

        return view('serviceEdit', ['user' => $user, 'service' => $service]);
    }

    function updateService(Request $req){
        $user = Auth::user();
        $path = $req->file('file') ->store('storage');
        $data = Service::find($req->id);
        $data->title =$req->title;
        $data ->about = $req->about;
        $data->serveCat = $req->servCat;
        $data->location = $req->location;
        $data->product = $req->product;
        $data->policy = $req->policy;
        $data->price = $req->price;
        $data->discount = $req->discount;
        $data->member_id = $user->id;
        $data->serviceImg = $path;
        $data->save();

        return redirect('/dashboard');

    }
}
