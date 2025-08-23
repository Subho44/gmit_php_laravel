<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

Route::get('/', function () {
    return  redirect('/jobs');
});

Route::get('/jobs',[JobController::class,'showjob'])->name('jobs.showjob');
