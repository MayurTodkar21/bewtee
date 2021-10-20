<?php
use App\Http\Controllers\ServiceDisplayController;
use App\Http\Controllers\ReviewController;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DisplayController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\BankingController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\uniqueFreelancer;
use App\Http\Controllers\particularService;
use App\Models\Freelancer;


use App\Models\User;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $user = Auth::user(); 
    $freelancer= Freelancer::all(); 
    return view('dashboard', ['user'=>$user, 'freelancer' =>$freelancer]);
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/edit', [BankingController::class,'bankDetail']);

Route::get("freelancer",function(){
    if (Auth::check()) {
        // The user is logged in...
        $user = Auth::user();  
        
        
        return view('freelancer',['user'=>$user]);
    }else{

        
        return view('welcome');
    }
    
   

});

Route::get("service", function(){
    if (Auth::check()) {
        // The user is logged in...
        
        return view('service');
    }else{
        
        
        return view('welcome');
    }
});
Route::get("review", function(){
    return view('servicereview');
});




Route::get('display' , [DisplayController::class , 'display']);
Route::get('serviceshow',[ServiceDisplayController::class,'displayService']);
Route::get('dashboard/edit', [AccountController::class,'account']);
Route::get('display/{id}', [uniqueFreelancer::class,'getSpecific']);
Route::get('serviceshow/{sno}', [particularService::class,'getService']);


Route::post('freelancer', [UserController::class, 'getData']);
Route::post('service',[ServiceController::class, 'addDetail']);

Route::post('review', [ReviewController::class, 'addReview']);