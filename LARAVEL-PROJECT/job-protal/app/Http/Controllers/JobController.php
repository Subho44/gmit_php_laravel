<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
   private $jobs = [
            ['title'=>'software engineer','company'=>'Google','location'=>'Bangalore'],
            ['title'=>'React Js','company'=>'Tcs','location'=>'Kolkata'],
            ['title'=>'Node js','company'=>'Wipro','location'=>'Delhi'],

        ];
    //show all job list
    public function showjob(Request $request) {
        $search = $request->input('search');
        //filter
        $jobs = $this->jobs;
        if($search) {
            $jobs =array_filter($this->jobs, function($job) use($search){
                return stripos($job['title'],$search) !== false;
            });
        }
        
        return view('jobs',[
            'jobs'=>$jobs,
            'search'=>$search
        ]);
    }
}
