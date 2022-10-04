<?php

namespace App\Http\Controllers\Admin\Faq;

use App\Http\Controllers\Controller;
use App\Http\Requests\Faq\StoreQuestionAnswerRequest;
use App\Http\Requests\Faq\UpdateQuestionAnswerRequest;
use App\Models\Basic\Lang;
use App\Models\Faq\QuestionAnswer;
use App\Models\Methods\PublicMethod;
use Illuminate\Http\Request;

class QuestionAnswerController extends Controller
{
    public function index()
    {
        $questions = QuestionAnswer::all();
        return view('pages.faq.index', compact('questions'));
    }

    public function edit(QuestionAnswer $question)
    {
        $languages = Lang::where('status','1')->get();
        $question = $question->toArray();
        $question['question'] = PublicMethod::translateAllLang('question_answers', $question['id'], 'question');
        $question['answer'] = PublicMethod::translateAllLang('question_answers', $question['id'], 'answer');
        return view('pages/faq/edit', compact( 'languages', 'question'));
    }

    public function create()
    {
        $languages = Lang::where('status','1')->get();
        return view('pages/faq/create', compact('languages'));
    }

    public function store(StoreQuestionAnswerRequest $request)
    {
        QuestionAnswer::store($request->validated());
        return redirect()->route('admin.faq.index');

    }

    public function update(UpdateQuestionAnswerRequest $request, QuestionAnswer $question)
    {
        QuestionAnswer::edit($request->validated(), $question);
        return redirect()->route('admin.faq.index');
    }
}
