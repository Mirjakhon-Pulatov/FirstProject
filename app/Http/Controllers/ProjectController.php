<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;


class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::orderBy('created_at', 'desc')->get();
        return view('auth.partials.projects', compact('projects'));
    }

    public function create()
    {
        return view('auth.partials.create_project');
    }

    public function store(Request $request, Project $project)
    {
        if ($request->hasFile('image')) {
            $name = $request->file('image');
            $name1 = $name->getClientOriginalName();
            $request->image->move(public_path('auth/uploads/project'), $name1);
        }
        $project = Project::create(array(
            'name' => $request['name'],
            'type' => $request->input('type'),
            'short_desc' => $request->input('short_desc'),
            'link' => $request->input('link'),
            'link_title' => $request->input('link_title'),
            'long_desc' => $request->input('long_desc'),
            'image' => $name1
        ));
        return redirect()->route('project.index');
    }

    public function show(string $id)
    {
        $vproject = Project::find($id);
        return view('user.partials.view', compact('vproject'));
    }

    public function edit(string $id)
    {
        $projects = Project::find($id);
        return view('auth.partials.edit', compact('projects'));
    }

    public function update(Request $request, string $id)
    {
        $projects = Project::find($id);
        if ($request->hasFile('image')) {
            if (File::exists(public_path('auth/uploads/project/' . $projects->image)) == $projects->image) {
                unlink(public_path('auth/uploads/project/' . $projects->image));
                $name = $request->file('image')->getClientOriginalName();
            } else {
                $name = $projects->image;
            }
            $request->image->move(public_path('auth/uploads/project'), $name);
        }
        $projects->update([
            'name' => $request['name'],
            'type' => $request->input('type'),
            'short_desc' => $request->input('short_desc'),
            'link' => $request->input('link'),
            'link_title' => $request->input('link_title'),
            'long_desc' => $request->input('long_desc'),
            'image' => $name ?? $projects->image
        ]);

        return redirect()->route('project.index');
    }

    public function destroy(Request $request, $id)
    {
        $projects = Project::find($id);
        if (File::exists(public_path('auth/uploads/project/' . $projects->image)) == $projects->image) {
            $path = public_path('auth/uploads/project/' . $projects->image);
            unlink($path);
            $projects->delete();
        } else {
            $projects->delete();
        }
        return redirect()->route('project.index');

    }

}
