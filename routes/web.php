<?php
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

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
    return view('jobs',[
        'greeting' => 'Wellcome',
        'jobs' => [
            [
                'id'     => 1,
                'title'  => 'CEO',
                'salary' => '$50,000'
            ],
            [
                'id'     => 2,
                'title' => 'Developer',
                'salary' => '$40,000'
            ]

        ]
    ]);
});

Route::get('/jobs/{id}', function ($id) {
$jobs = [
            [
                'id'     => 1,
                'title'  => 'CEO',
                'salary' => '$50,000'
            ],
            [
                'id'     => 2,
                'title' => 'Developer',
                'salary' => '$40,000'
            ]

            ];
            
    $job = Arr::first($jobs,fn($job) => $job['id'] == $id);
   // dd($job);

    return view('job',['job' => $job]);
});