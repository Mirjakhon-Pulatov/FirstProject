<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->get();
        return view('user.partials.index', compact('projects'));
    }
    public function about()
    {
        return view('user.partials.about');
    }

    public function service()
    {
        return view('user.partials.service');
    }

    public function contact()
    {
        return view('user.partials.contact');
    }

    public function project()
    {
        $projects = Project::latest()->get();
        return view('user.partials.projects', compact('projects'));
    }

    public function view($id)
    {
//        dd($id);
        $vproject = Project::find($id);
        return view('user.partials.view', compact('vproject'));
    }

}
