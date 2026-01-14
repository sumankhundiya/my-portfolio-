<?php

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

    // Route::get('/', function () {
    //     return view('home');
    // });


Route::view('/about','about');

Route::get('/',[ProjectController::class,"show"]);
Route::view('/contact','contact');

Route::post('/resume', [ProjectController::class, 'verifyPost']);

Route::get('/projects', [ProjectController::class, 'show']);
Route::post('projects', [ProjectController::class, 'show']);

Route::get('/work', [ProjectController::class, 'work']);
Route::post('work', [ProjectController::class, 'work']);

Route::get('pdf',[ProjectController::class,"viewpdf"]);
Route::post('email',[ProjectController::class,"mailmsg"]);

// Route::get('/form','form');
Route::post('/form',[ProjectController::class,'form']);










