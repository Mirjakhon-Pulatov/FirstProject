<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::latest()->get();
        return view('auth.partials.projects', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.partials.create_project');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Project $project)
    {
//        dd($request->all());
        if($request->hasFile('image'))
        {
            $path = $request->file('image')->store('projects', 'public');
        }
        $project = Project::create(array(
            'name' => $request['name'],
            'type' => $request->input('type'),
            'short_desc' => $request->input('short_desc'),
            'link' => $request->input('link'),
            'link_title' => $request->input('link_title'),
            'long_desc' => $request->input('long_desc'),
            'image' => $path
        ));

        return redirect()->route('project.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $vproject = Project::find($id);
        return view('user.partials.view', compact('vproject'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $projects = Project::find($id);
        return view('auth.partials.edit', compact('projects'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $projects = Project::find($id);
        if ($request->hasFile('image'))
        {
            if (File::exists(public_path('storage/' . $projects->image)) == $projects->image)
            {
//                File::delete(public_path('storage/' . $projects->image));
                Storage::delete($projects->image);
            }
            $path = $request->file('image')->store('projects', 'public');
        }
        $projects->update([
            'name' => $request['name'],
            'type' => $request->input('type'),
            'short_desc' => $request->input('short_desc'),
            'link' => $request->input('link'),
            'link_title' => $request->input('link_title'),
            'long_desc' => $request->input('long_desc'),
            'image' => $path ?? $projects->image
        ]);

        return redirect()->route('project.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
//        dd('delete');
        $projects = Project::find($id);
            if (File::exists(public_path('storage/' . $projects->image)) == $projects->image)
            {
                Storage::delete($projects->image);
                $projects->delete();
            }
            else{
                $projects->delete();
            }
        return redirect()->route('project.index');

    }

}
