<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\UserController;
use App\Http\Controllers\ServiceDisplayController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\DisplayController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\BankingController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\serviceEditController;
use App\Http\Controllers\editController;
use App\Http\Controllers\uniqueFreelancer;
use App\Http\Controllers\particularService;


use App\Models\Freelancer;
use App\Models\Service;
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
    $freelancer= DB::table('freelancers')->where('member_id' ,'=', $user['id'])->get();
    $service = DB::table('services')->where('member_id' ,'=', $user['id'] )->get();
    return view('dashboard', ['user'=>$user, 'freelancer' =>$freelancer, 'service' =>$service]);
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
Route::get("/{id}/review", function($id){
    $service = Service::find($id);
    return view('servicereview', ['service' => $service]);
});




Route::get('display' , [DisplayController::class , 'display']);
Route::get('serviceshow',[ServiceDisplayController::class,'displayService']);
Route::get('dashboard/edit', [AccountController::class,'account']);
Route::get('display/{id}', [uniqueFreelancer::class,'getSpecific']);
Route::get('serviceshow/{sno}', [particularService::class,'getService']);
Route::get('edit/{id}', [editController::class,'editData']);
Route::get('editservice/{id}', [serviceEditController::class, 'editServiceData']);

Route::post('freelancer', [UserController::class, 'getData']);
Route::post('service',[ServiceController::class, 'addDetail']);

Route::post('/{id}/review', [ReviewController::class, 'addReview']);
Route::post('/editservice' , [serviceEditController::class, 'updateService']);
Route::post('/edit/edit', [editController::class, 'updateData']);