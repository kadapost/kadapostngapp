<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
	    $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function index()
    {
        $jobs = Job::orderBy('id', 'desc')->paginate(8);
        return view('jobs.browse-jobs')->with([
            'jobs' => $jobs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jobs.add-job');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (auth()->user()->role != 'administrator') return back();
        $this->validate($request, [
            'user_email' => 'required',
            'title' => 'required',
            'type' => 'required',
            'description' => 'required',
            'company_name' => 'required'
        ]);
        $job = new Job;
        $job->user_id = auth()->user()->id;
        $job->user_email = auth()->user()->email;
        $job->title = $request->input('title');
        $job->type = $request->input('type');
        $job->category = 'any type';
        $job->location = $request->input('location');
        $job->tags = $request->input('tags');
        $job->description = $request->input('description');
        $app = $request->input('application');
        if(strpos($app, '@')){
            $job->application_email = $app;
        }else{
            $job->application_url = $app;
        }
        $job->closing_date = $request->input('closing_date');
        $job->company_name = $request->input('company_name');
        $job->company_website = $request->input('company_website');
        if($request->hasFile('logo')){
            $fileNameWithExt = $request->file('logo')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('logo')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            move_uploaded_file($request->file('logo'), "./images/$fileNameToStore");
            $job->logo = $fileNameToStore;
        }
        $job->save();
        return redirect('./jobs')->with('success', 'Job Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $job = Job::findOrFail($id);
        return view('jobs.job-page')->with([
            'job' => $job
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
