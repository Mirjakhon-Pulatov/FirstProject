<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;


class ProjectController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function index()
    {
        $projects = Project::orderBy('created_at','desc')->get();
        return view('auth.partials.projects', compact('projects'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function create()
    {
        return view('auth.partials.create_project');
    }

    /**
     * @param Request $request
     * @param Project $project
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request, Project $project)
    {
        if ($request->hasFile('image'))
        {
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

    /**
     * @param string $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function show(string $id)
    {
        $vproject = Project::find($id);
        return view('user.partials.view', compact('vproject'));
    }

    /**
     * @param string $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function edit(string $id)
    {
        $projects = Project::find($id);
        return view('auth.partials.edit', compact('projects'));
    }

    /**
     * @param Request $request
     * @param string $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, string $id)
    {
        $projects = Project::find($id);
        if ($request->hasFile('image'))
        {
            if (File::exists(public_path('auth/uploads/project/' . $projects->image)) == $projects->image)
            {
                unlink(public_path('auth/uploads/project/'.$projects->image));
                $name = $request->file('image')->getClientOriginalName();
            }else{
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

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request, $id)
    {
        $projects = Project::find($id);
            if (File::exists(public_path('auth/uploads/project/' . $projects->image)) == $projects->image)
            {
                $path = public_path('auth/uploads/project/'.$projects->image);
                unlink($path);
                $projects->delete();
            }
            else{
                $projects->delete();
            }
        return  redirect()->route('project.index');

    }

}
