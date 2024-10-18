<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get("/remove/{id}",[Homecontroller::class,"remove"]);
Route::get("/showcart/{id}",[Homecontroller::class,"showcart"]);
Route::post("/addcart/{id}",[Homecontroller::class,"addcart"]);
Route::get("/deletechef/{id}",[Admincontroller::class,"deletechef"]);
Route::post("/updatefoodchef/{id}",[Admincontroller::class,"updatefoodchef"]);
Route::get("/updatechef/{id}",[Admincontroller::class,"updatechef"]);
Route::post("/uploadchef",[Admincontroller::class,"uploadchef"]);
Route::get("/viewchef",[Admincontroller::class,"viewchef"]);
Route::get("/viewreservation",[Admincontroller::class,"viewreservation"]);
Route::post("/reservation",[Admincontroller::class,"reservation"]);
Route::post("/update/{id}",[Admincontroller::class,"update"]);
Route::get("/updateview/{id}",[Admincontroller::class,"updateview"]);
Route::get("/deletemenu/{id}",[Admincontroller::class,"deletemenu"]);
Route::post("/uploadfood",[Admincontroller::class,"upload"]);
Route::get("/foodmenu",[Admincontroller::class,"foodmenu"]);
Route::get("/deleteuser/{id}",[Admincontroller::class,"deleteuser"]);
Route::get("/users",[Admincontroller::class,"user"]);
Route::get("/",[Homecontroller::class,"index"]);
Route::get("/redirects",[Homecontroller::class,"redirects"]);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
