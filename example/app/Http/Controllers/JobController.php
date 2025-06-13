<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
    public function index(){
      $jobs = Job::with('employer')->latest()->simplePaginate(3);
      return view('jobs/index', [
        'jobs' => $jobs
      ]);
    }

    public function create(){
      return view('jobs/create');
    }

    public function show(Job $job){
      // $job = Job::find($id);
      return view('jobs/show', ['job' => $job]);
    }

    public function store(){
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
    }

    public function edit(Job $job){
      // $job = Job::find($id);
      return view('jobs/edit', ['job' => $job]);
    }

    public function update(Job $job){
      // validate
      request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required', ],
      ]);

      // authorize (on hold)

      // update
      // $job = Job::findOrFail($id); // findOrFail σε περίπτωση λάθος id
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
    }

    public function destroy(Job $job){
      //authorize(on hold)

      //delete
      // $job = Job::findOrFail($id);
      // $job->delete();
      // ή σε μία γραμμη:
      // Job::findOrFail($id)->delete();
      $job->delete();

      //redirect
      return redirect('/jobs');      
    }
}
