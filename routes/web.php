<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/jobs', function () {
$job = Job::with('employer')->get();
    return view('jobs',[
        'greeting' => 'Wellcome',
        'jobs' => $job
    ]);
});

Route::get('/jobs/{id}', function ($id){

            
    $job = Job::find($id);
   // dd($job);

    return view('job',['job' => $job]);
});