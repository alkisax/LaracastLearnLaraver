<?php
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

// index
Route::get('/', function () {

// $jobs = Job::all();
  // dd($jobs[0]->title);


    return view('home', [
      'greeting' => 'Hello',
      'name' => 'Alkis'
    ]);
});

Route::get('/jobs', function () {
  $jobs = Job::with('employer')->latest()->simplePaginate(3);
  return view('jobs/index', [
    'jobs' => $jobs
  ]);
});

// create
Route::get('/jobs/create', function () {
  return view('jobs/create');
});

//show
Route::get('/jobs/{id}', function ($id) {
  $job = Job::find($id);
  return view('jobs/show', ['job' => $job]);
});

//store
Route::post('/jobs', function () {
  request()->validate([
    'title' => ['required', 'min:3'],
    'salary' => ['required', ],
  ]);

  Job::create([
    'title' => request('title'),
    'salary' => request('salary'),
    'employer_id' => 1 //hardcoded
  ]);
  return redirect('/jobs');
});

// edit
Route::get('/jobs/{id}/edit', function ($id) {
  $job = Job::find($id);
  return view('jobs/edit', ['job' => $job]);
});

//update
Route::patch('/jobs/{id}', function ($id) {
  // validate
  request()->validate([
    'title' => ['required', 'min:3'],
    'salary' => ['required', ],
  ]);

  // authorize (on hold)

  // update
  $job = Job::findOrFail($id); // findOrFail σε περίπτωση λάθος id
  $job->title = request('title');
  $job->salary = request('salary');
  $job->save();

  //αλλιώς το ίδιο με 
  // $job->update([
  //   'title' => request('title'),
  //   'salary' => request('salary'),
  // ]);

  // redirect to job page
  return redirect('/jobs/' . $job->id);

});

//destroy
Route::delete('/jobs/{id}', function ($id) {
  //authorize(on hold)

  //delete
  // $job = Job::findOrFail($id);
  // $job->delete();
  // ή σε μία γραμμη:
  Job::findOrFail($id)->delete();

  //redirect
  return redirect('/jobs');
});


Route::get('/contact', function () {
    return view('contact');
});
