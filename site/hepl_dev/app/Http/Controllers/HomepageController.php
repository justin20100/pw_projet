<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    /**
     * homepage get random projects
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::with(['tags'])->with(['users'])->limit(6)->get();
        return view('index', compact('projects'));
    }
}
