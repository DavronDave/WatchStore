<?php

namespace App\Http\Controllers\Admin\Basic;

use App\Http\Controllers\Controller;
use App\Http\Requests\Contact\StoreContactRequest;
use App\Http\Requests\Contact\UpdateContactRequest;
use App\Models\Basic\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        $types = Contact::TYPES;
        return view('pages/contacts/index', compact('contacts', 'types'));
    }

    public function show($contact_id)
    {
        $contact = Contact::getData($contact_id);
        $breadcrumbs = [['link' => "home", 'name' => "Рабочий стол"], ['link' => "contacts", 'name' => "Контакты"],['name' => $contact['name']]];
        return view('pages/contacts/show', compact('breadcrumbs', 'contact'));
    }

    public function store(StoreContactRequest $request)
    {
        Contact::store($request->validated());
        return redirect(route('admin.contact.index'));
    }

    public function edit(Contact $contact)
    {
        $types = Contact::TYPES;
        return view('pages/contacts/edit', compact('contact', 'types'));
    }

    public function update(UpdateContactRequest $request, $contact)
    {
        Contact::edit($request->validated(), $contact);
        return redirect(route('admin.contact.index'));
    }
}
