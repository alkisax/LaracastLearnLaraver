<?php
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {

// $jobs = Job::all();
  // dd($jobs[0]->title);


    return view('home', [
      'greeting' => 'Hello',
      'name' => 'Alkis'
    ]);
});

Route::get('/jobs', function () {
  $jobs = Job::with('employer')->simplePaginate(3);
  return view('jobs', [
    'jobs' => $jobs
  ]);
});

Route::get('/jobs/{id}', function ($id) {
  $job = Job::find($id);
  return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});
