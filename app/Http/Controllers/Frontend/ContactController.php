<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|integer',
            'email' => 'required|max:255',
            'subject' => 'required|max:255',
            'msg' => 'required',
        ]);

        $contact = new Contact();
        $contact->user_id = $request->user_id;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->msg = $request->msg;
        $contact->save();

        Mail::to('anwar.saeed656@gmail.com')->send(new ContactMail($contact));
        return response()->json([
            'status' => 200,
            'success' => 'Your Contact Information Is Send Successfully!'
        ]);
    }
}
