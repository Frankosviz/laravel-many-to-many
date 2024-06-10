<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('admin.dashboard', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(StoreProjectRequest $request)
    {
        $data = $request->validated();
        $newProject = new Project();
        $newProject->fill($data);
        $newProject->slug = Project::generateSlug($newProject->title);
        $newProject->save();
        return redirect()->route('admin.projects.show', $newProject->slug);
    }

    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));
    }

    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    public function update(UpdateProjectRequest $request, Project $project)
    {
        $data = $request->validated();
        $project->update($data);
        return redirect()->route('admin.projects.show', $project->slug);
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('admin.dashboard');
    }
   
}
