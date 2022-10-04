<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Article\Article;
use App\Models\Basic\SiteVisit;
use App\Models\Project\Project;
use App\Models\Regulation\Regulation;
use App\Models\Request\Request as RequestModel;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $projects = Project::where('status', 1)->get();
        $counts = [
            'articles' => Article::where('status', 1)->count(),
            'requests' => RequestModel::count(),
            'documents' => Regulation::where('status', 1)->count(),
        ];
        $to = $request->get('to', date("Y-m-d"));
        $from = $request->get('from', date('Y-m-d', strtotime('-10 days', strtotime($to))));
        $visits = SiteVisit::whereBetween('date', [$from, $to])->get()->sortBy('date');
        $visit_count = [];
        foreach ($visits as $visit) {
            if (!isset($visit_count[$visit->date])) {
                $visit_count[$visit->date] = 0;
            };
            $visit_count[$visit->date]++;
        }
        $max = $visit_count ? max($visit_count) : 0;
        return view('pages/dashboard-v3', compact('projects', 'counts', 'visit_count', 'max'));
    }
}
