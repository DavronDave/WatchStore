<?php

namespace App\Http\Controllers\Site\Project;

use App\Http\Controllers\Controller;
use App\Models\Project\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function show(Project $project)
    {
        if (!$project->status) {
            return abort(404);
        }
        $project = Project::with('descriptions','infographics','events','images')->find($project->id);
        return view('site.project-show', compact('project'));
    }
}
