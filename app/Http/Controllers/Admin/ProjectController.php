<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\project;
use App\Models\Type;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = project::all();

        return view('projects', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = Type::all();

        return view('create', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = request()->all();

        $newProject = new project();

        $newProject->name = $data['name'];
        $newProject->author = $data['author'];
        $newProject->type_id = $data['type_id'];
        $newProject->description = $data['description'];

        $newProject->save();

        $project = $newProject;

        return view('showProject', compact('project'));

    }

    /**
     * Display the specified resource.
     */
    public function show(project $project)
    {
        return view('showProject', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(project $project)
    {
        $types = Type::all();
        return view('edit', compact('project', 'types'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, project $project)
    {
        $data = request()->all();

        $project->name = $data['name'];
        $project->author = $data['author'];
        $project->type_id = $data['type_id'];
        $project->description = $data['description'];

        $project->update();

        return view('showProject', compact('project'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(project $project)
    {
        $project->delete();

        return redirect()->route('project.index');
    }
}
