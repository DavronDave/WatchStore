<?php

namespace App\Http\Controllers\Site\Faq;

use App\Http\Controllers\Controller;
use App\Models\Faq\QuestionAnswer;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $questions = QuestionAnswer::where('status', 1)->orderByDesc('created_at')->get();
        return view('site.faq', compact('questions'));
    }
}
