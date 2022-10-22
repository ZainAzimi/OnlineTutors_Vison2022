<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\TutorController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\TeacherDashboardController;
use App\Http\Controllers\StudentDashboardController;
use App\Http\Controllers\PaymentController;
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



////////Tutor Controller ////////////
Route::get('/tutorsprofile',[TutorController::class,'index']);
Route::get('/selectlogin',[TutorController::class,'selectlogin']);
Route::get('/selectregister',[TutorController::class,'selectregister']);
Route::get('/tutorlogin',[TutorController::class,'tutorlogin']);
Route::post('/tutorpostlogin',[TutorController::class,'tutorpostlogin']);
Route::get('/tutorregister',[TutorController::class,'tutorregister']);
Route::get('/profilecreate',[TutorController::class,'profilecreate']);
Route::post('/saveprofile',[TutorController::class,'saveprofile']);
Route::post('/tutorcreate',[TutorController::class,'tutorcreate']);
Route::get('profilepage/{id}', [TutorController::class,'ProfileDetail']);
Route::get('/tutorlogout',[TutorController::class,'Logout']);

////////////Student Controller//////////////
Route::get('/studentregister',[StudentController::class,'studentregister']);
Route::get('/studentlogin',[StudentController::class,'studentlogin']);
Route::post('/studentcreate',[StudentController::class,'registerpost']);
Route::post('/studentpostlogin',[StudentController::class,'studentloginpost']);
Route::get('/studentlogout',[StudentController::class,'Logout']);



//////////////////Pages Controler//////////////////
Route::get('/aboutus',[PagesController::class,'aboutus']);
Route::get('/contactus',[PagesController::class,'contactus']);


///////////////Teacher Dashboard ////////////////
Route::get('/teacherdashboard',[TeacherDashboardController::class,'teacherdashboard']);
Route::get('/mystudents',[TeacherDashboardController::class,'mystudents']);
Route::get('/myprofile',[TeacherDashboardController::class,'myprofile']);



///////////////Student Dahsboard//////////////
Route::get('/studentdashboard',[StudentDashboardController::class,'studentdashboard']);
Route::get('/myteachers',[StudentDashboardController::class,'myteachers']);



///////////////Payment Controller//////////////////
Route::post('/createroom',[PaymentController::class,'create']);
Route::get('/payment',[PaymentController::class,'payment']);
Route::post('/createpayment',[PaymentController::class,'store']);