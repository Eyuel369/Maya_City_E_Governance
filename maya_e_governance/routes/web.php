<?php

use Illuminate\Support\Facades\Route;

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
    return view('landingPage');
});

Route::get('/login', function () {
    return view('loginPage');
});

Route::get('/adoptionRegistration', function () {
    return view('adoptionRegistrationPage');
});

Route::get('/birthRegistration', function () {
    return view('birthRegistrationPage');
});

Route::get('/citizenRegistration', function () {
    return view('citizenRegistrationPage');
});

Route::get('/deathRegistration', function () {
    return view('deathRegistrationPage');
});

Route::get('/divorceRegistration', function () {
    return view('divorceRegistrationPage');
});

Route::get('/marriageRegistration', function () {
    return view('marriageRegistrationPage');
});
