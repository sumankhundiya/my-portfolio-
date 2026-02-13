<?php

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ContactController;

    // Route::get('/', function () {
    //     return view('home');
    // });


Route::view('/about','about');

Route::get('/',[ProjectController::class,"show"])->name('/index');
Route::view('/contact','contact');

Route::post('/resume', [ProjectController::class, 'verifyPost']);

Route::get('/projects', [ProjectController::class, 'show']);
Route::post('projects', [ProjectController::class, 'show']);

// Route::get('/work', [ProjectController::class, 'work']);
// Route::post('work', [ProjectController::class, 'work']);

Route::get('pdf',[ProjectController::class,"viewpdf"]);
Route::post('email',[ProjectController::class,"mailmsg"]);

// Route::get('/form','form');
Route::post('/form',[ProjectController::class,'form']);

Route::get('/myproject',[DataController::class,'data']);
Route::get('/projects/{id}/edit', [DataController::class, 'edit']);
Route::get('/projects/{id}/delete', [DataController::class, 'delete']);

Route::view('/create','createproject');
Route::post('/create', [DataController::class, 'create']);
Route::post('/project/{id}/update', [DataController::class, 'update']);

Route::view('login','admin')->name('login');
Route::post('/admin',[AdminController::class,'login']);

Route::middleware('admincheck')->group(function() {

    Route::view('adminpanel','admins.adminpanel');

    Route::get('admin',[ProfileController::class,'index'])->name('data');
    Route::post('/admin/profile/update/{id}', [ProfileController::class, 'update']);

    Route::get('aboutme',[AboutController::class,'index']);
    Route::post('/admin/about/update/{id}', [AboutController::class, 'update']);

    Route::get('myskill',[SkillController::class,'index']);
    Route::post('/Skills/update', [SkillController::class, 'update']);
    Route::post('/Skills/create', [SkillController::class, 'create']);
    Route::post('/Skills/{id}/delete', [SkillController::class, 'delete']);

    Route::get('contactme',[ContactController::class,'index']);
    Route::put('/admin/contact/update/{id}', [ContactController::class, 'update']);

    Route::get('/logout',[AdminController::class,'logout']);

});





