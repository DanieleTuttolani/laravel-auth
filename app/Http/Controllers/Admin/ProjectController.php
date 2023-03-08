<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
class ProjectController extends Controller
{
    public function index(){
        $projects = Project::all();

        return view('admin.projects.index', compact('projects'));
    }

    public function show(Project $project){

        return view('admin.projects.show', compact('project'));
    }

    public function edit(Project $project){
        return view('admin.projects.edit' , compact('project'));
    }

    public function update(Request $request , Project $project){

        $data = $request->all();
        $project->update($data);
        return to_route('admin.projects.show', compact('project'));
    }
}
