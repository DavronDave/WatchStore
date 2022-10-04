<?php

namespace App\Http\Controllers\Admin\Project;

use App\Http\Controllers\Controller;
use App\Http\Requests\Project\StoreEventRequest;
use App\Http\Requests\Project\StoreInfographicDescriptionRequest;
use App\Http\Requests\Project\StoreProjectDescriptionRequest;
use App\Http\Requests\Project\StoreProjectRequest;
use App\Http\Requests\Project\UpdateProjectDescriptionRequest;
use App\Http\Requests\Project\UpdateProjectEventRequest;
use App\Http\Requests\Project\UpdateProjectInfographicRequest;
use App\Http\Requests\Project\UpdateProjectRequest;
use App\Models\Basic\Lang;
use App\Models\Methods\PublicMethod;
use App\Models\Project\Project;
use App\Models\Project\ProjectDescription;
use App\Models\Project\ProjectEvent;
use App\Models\Project\ProjectInfographic;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('pages.project.index', compact('projects'));
    }

    public function create()
    {
        $languages = Lang::where('status', '1')->get();
        return view('pages.project.create', compact('languages'));
    }

    public function store(StoreProjectRequest $request)
    {
        $project = Project::store($request->validated());
        return redirect()->route('admin.project.create-description', ['project' => $project->id]);
    }

    public function edit(Project $project)
    {
        $languages = Lang::where('status', '1')->get();
        $project = array_merge($project->toArray(), ['images' => $project->images->toArray()]);
        $project['name'] = PublicMethod::translateAllLang('projects', $project['id'], 'name');
        $project['short_description'] = PublicMethod::translateAllLang('projects', $project['id'], 'short_description');
        $project['region'] = PublicMethod::translateAllLang('projects', $project['id'], 'region');
        return view('pages.project.edit.edit', compact('project', 'languages'));
    }

    public function update(UpdateProjectRequest $request, Project $project)
    {
        Project::edit($request->validated(), $project);
        return redirect()->route('admin.project.index');
    }

    public function createDescription(Project $project)
    {
        $languages = Lang::where('status', '1')->get();
//        dd($project->descriptions->max('sort'));
        return view('pages.project.description', compact('project', 'languages'));
    }

    public function storeDescription(StoreProjectDescriptionRequest $request, Project $project)
    {
        $data = $request->validated();
        $data['project_id'] = $project->id;
        ProjectDescription::store($data);
        return redirect()->back();
    }

    public function editDescription(Project $project)
    {
        $languages = Lang::where('status', '1')->get();
        $descriptions = $project->descriptions->sortBy('sort')->toArray();
        foreach ($descriptions as $key => $description) {
            $descriptions[$key]['description'] = PublicMethod::translateAllLang('project_descriptions', $description['id'], 'description');
        }
        return view('pages.project.edit.description', compact('descriptions', 'languages', 'project'));

    }

    public function updateDescription(UpdateProjectDescriptionRequest $request, ProjectDescription $description)
    {
        ProjectDescription::edit($request->validated(), $description);
        return redirect()->route('admin.project.edit-description', ['project' => $description->project_id]);
    }

    public function createInfographic(Project $project)
    {
        $languages = Lang::where('status', '1')->get();
        return view('pages.project.infographics', compact('project', 'languages'));
    }

    public function storeInfographic(StoreInfographicDescriptionRequest $request, Project $project)
    {
        $data = $request->validated();
        $data['project_id'] = $project->id;
        ProjectInfographic::store($data);
        return redirect()->back();
    }

    public function editInfographic(Project $project)
    {
        $languages = Lang::where('status', '1')->get();
        $infographics = $project->infographics->toArray();
        foreach ($infographics as $key => $infographic) {
            $infographics[$key]['title'] = PublicMethod::translateAllLang('project_infographics', $infographic['id'], 'title');
        }
        return view('pages.project.edit.infographics', compact('infographics', 'languages', 'project'));
    }

    public function updateInfographic(UpdateProjectInfographicRequest $request, ProjectInfographic $infographic)
    {
        ProjectInfographic::edit($request->validated(), $infographic);
        return redirect()->route('admin.project.edit-infographic', ['project' => $infographic->project_id]);
    }

    public function createEvent(Project $project)
    {
        $languages = Lang::where('status', '1')->get();
        return view('pages.project.events', compact('project', 'languages'));
    }

    public function storeEvent(StoreEventRequest $request, Project $project)
    {
        $data = $request->validated();
        $data['project_id'] = $project->id;
        ProjectEvent::store($data);
        return redirect()->back();
    }

    public function editEvent(Project $project)
    {
        $languages = Lang::where('status', '1')->get();
        $events = $project->events->toArray();
        foreach ($events as $key => $event) {
            $events[$key]['title'] = PublicMethod::translateAllLang('project_events', $event['id'], 'title');
        }
        return view('pages.project.edit.events', compact('events', 'languages', 'project'));
    }

    public function updateEvent(UpdateProjectEventRequest $request, ProjectEvent $event)
    {
        ProjectEvent::edit($request->validated(), $event);
        return redirect()->route('admin.project.edit-event', ['project' => $event->project_id]);
    }
}
