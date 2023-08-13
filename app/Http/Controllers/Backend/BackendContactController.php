<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class BackendContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $contacts = Contact::orderBy('created_at', 'DESC')->paginate(5);
        return view('backend.contact.index', compact('contacts'));
    }
    public function show($id)
    {
        $contact = Contact::findOrFail(intval($id));
        $contact->is_read = 1;
        $contact->save();

        return view('backend.contact.show', compact('contact'));
    }
}
