<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;

class HomeController extends Controller
{
	protected $jobs;

	function __construct(Job $jobs)
	{
		$this->jobs = $jobs;
	}
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$jobs = $this->jobs->all()->sortByDesc('created_at');
        return view('home', compact('jobs'));
    }

    public function showJob($id)
    {
    	$job = $this->jobs->findOrFail($id);

    	return view('job', compact('job'));
    }
}
