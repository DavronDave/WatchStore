<?php

namespace App\Http\Controllers\Site\Home;

use App\Http\Controllers\Controller;
use App\Models\Methods\PublicMethod;
use App\Models\Project\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $projects = Project::where('status', 1)->get();
        return view('site.index', compact('projects'));
    }

    public function searchData(Request $request)
    {
        $response = PublicMethod::searchContent();
        return view('site.search', compact('response'));
    }
}
