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
$job = Job::with('employer')->latest()->cursorPaginate(3);
    return view('jobs/index', [
        'greeting' => 'Wellcome',
        'jobs' => $job
    ]);
});

Route::get('/jobs/create', function () {
    return view('jobs/create');
    //dd('hoiiiiii');
});

Route::post('/jobs', function () {
    //return view('jobs/create');
    //dd(request()->all());
    // validation
    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1
    ]);
    return redirect('/jobs');
});

Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);
    // dd($job);
    return view('jobs/show', ['job' => $job]);
});
