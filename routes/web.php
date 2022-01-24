<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BikeController;

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

Route::get('/login', function () {
    
    return view('login');
});
Route::get('/logout', function () {
    Session::forget('user');
    Session::forget('msg');
    return redirect('login');
});


Route::middleware(['admin'])->group(function(){
    Route::get('/admin', function () {
        return view('admin');
        
    });

    Route::get('/admin', function () {
        $tables = DB::select('SHOW TABLES'); // returns an array of stdObjects
    return view('admin', compact('tables'));
});

    Route::get('/admin', function (){
       
        $count= DB::table('Users')->get()->count();
        return view('adminTables',compact($count));
    
    });

    Route::get("removebike/{id}",[BikeController::class,'removeBike']);
    Route::get("adminWidget",function () {
        return view('adminWidget');
        
    });
    
    Route::get("adminRents",function () {
        $data=DB::table('rents')->get();
        $users=DB::table('users')->get();
        $bikes=DB::table('bike')->get();

        return view('adminRents',['rent'=>$data],['user'=>$users]);
        
    });
    Route::get("adminBikes",function () {
     
        $bikes=DB::table('bike')->get();

        return view('adminBikes',['bike'=>$bikes]);
        
    });
    Route::get("adminCalendar",function () {
     
        return view('adminCalendar');
        
    });

    Route::get("adminUsers",function () {


        $users=DB::table('users')->get();
        return view('adminUsers',['user'=>$users]);
        
    });
    


    Route::get("removeUser/{id}",[BikeController::class,'removeUser']);
    Route::get("removeBike/{id}",[BikeController::class,'removeBike']);
    Route::get("changeRole/{id}",[BikeController::class,'changeRole']);

    Route::get("updateStatustoOnrent/{id}",[BikeController::class,'updateStatustoOnrent']);
    Route::get("updateStatustoPending/{id}",[BikeController::class,'updateStatustoPending']);
    Route::get("updateStatustoAcco/{id}",[BikeController::class,'updateStatustoAcco']);
    Route::post("addBike",[BikeController::class,'addBike']);

});




//normal user
Route::get("/about",function () {
     
    return view('about');
    
});
Route::get("/contact",function () {
     
    return view('contact');
    
});


Route::post("/login",[UserController::class,'login']);
Route::post("/register",[UserController::class,'register']);
Route::get("/",[BikeController::class,'index']);
Route::get("/detail/{id}",[BikeController::class,'detail']);
Route::get("search",[BikeController::class,'search']);
Route::post("add_to_cart",[BikeController::class,'addToCart']);
Route::get("/cartList",[BikeController::class,'cartList']);
Route::get("removecart/{id}",[BikeController::class,'removeCart']);
Route::get("rentNow",[BikeController::class,'rentNow']);
Route::post("renttime",[BikeController::class,'renttime']);
Route::get("rentHistory",[BikeController::class,'myRents']);
Route::get("cancelOrder/{rent_id}",[BikeController::class,'cancelOrder']);


//Route::get("check",[BikeController::class,'checkDispo']);





