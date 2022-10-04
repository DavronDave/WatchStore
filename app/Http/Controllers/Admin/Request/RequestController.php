<?php

namespace App\Http\Controllers\Admin\Request;

use App\Http\Controllers\Controller;
use App\Models\Request\Request;

class RequestController extends Controller
{
    public function index()
    {
        $requests = Request::orderByDesc('created_at')->get();
        return view('pages.request.index', compact('requests'));
    }

    public function show(Request $request)
    {
        $request->update(['status' => 1]);
        return view('pages.request.show', compact('request'));
    }
}
