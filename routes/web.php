<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('/', function () {
    return view('welcome');
});

Route::view("/loginform", "forms.login");
Route::view("/form", "forms.form")->name("form.get");
Route::view("/contact", "forms.contact");

// Route::post("/handleform",[FormController::class, 'handleFormSubmission']);
Route::post("/handleform",[FormController::class, 'handleFormSubmission'])->name("form.post");

