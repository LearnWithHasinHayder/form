<?php

use Illuminate\Routing\Middleware\ThrottleRequests;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ExtraController;
use App\Http\Controllers\HelloController;
use App\Http\Middleware\SecretMiddleware;

Route::get('/', function () {
    return view('welcome');
});

Route::view("/loginform", "forms.login");
// Route::view("/form", "forms.form")->name("form.get");
Route::view("/form", "forms.newform")->name("form.get");
Route::view("/contact", "forms.contact");

// Route::post("/handleform",[FormController::class, 'handleFormSubmission']);
// Route::post("/handleform",[FormController::class, 'handleFormSubmission'])->name("form.post");
Route::post("/handleform", [ExtraController::class, 'checkValidation'])->name("form.post");


Route::get("/secret", function () {
    return "Secret Message";
})->middleware(SecretMiddleware::class);

// Route::get("/hello", [HelloController::class, 'hello'])->middleware('throttle:2,1');
// Route::get("/hello2", [HelloController::class, 'hello2'])->middleware('throttle:2,1');



Route::middleware(['throttle:2,1'])->group(function () {
    Route::get("/hello", [HelloController::class, 'hello']);
    Route::get("/hello2", [HelloController::class, 'hello2']);
});

