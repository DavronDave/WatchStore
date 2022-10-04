<?php

namespace App\Http\Controllers\Site\Contact;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\StoreFeedbackRequest;
use App\Models\Basic\About;
use App\Models\Basic\Contact;
use App\Models\Request\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::where('status', 1)->get();
        $points = About::getSiteData();
        return view('site.contacts', compact('points', 'contacts'));
    }

    public function storeFeedback(StoreFeedbackRequest $request)
    {
        $data = $request->validated();
        $data['status'] = 0;
        Request::create($data);
        return redirect()->route('site.contact')->with('success', __('locale.success'));
    }
}
