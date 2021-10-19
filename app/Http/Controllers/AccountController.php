<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Service;
class AccountController extends Controller
{
    //
    function account(){
        return User::find(11)-> serviceData;
    }
}
