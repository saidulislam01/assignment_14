<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssignmentController;

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

//Question 1:
Route::post('/retriveName',  [AssignmentController::class, 'retriveName']);

//Question 2:
Route::post('/userAgent',  [AssignmentController::class, 'userAgent']);

//Question 3:
Route::get('/queryParam', [AssignmentController::class, 'page']);

//Question 4:
Route::get('/responseJson',  [AssignmentController::class, 'responseJson']);

//Question 5:
Route::post('/fileUP',  [AssignmentController::class, 'fileUP']);

//Question 6:
Route::get('/rememberCookie',  [AssignmentController::class, 'rememberCookie']);

//Question 7:
Route::get('/submit', function (Request $request) {
    $email = $request->input('email');
    if($email){
        $responseData = [
            'success' => true,
            'message' => 'Form submitted successfully.'
        ];
        return response()->json($responseData);
    }else{
        return "Please Enter Email";
    }
});
