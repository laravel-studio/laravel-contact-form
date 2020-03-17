<?php

namespace Laravelstudio\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Laravelstudio\Contact\Mail\ContactMailable;
use Laravelstudio\Contact\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }

    public function send(Request $request)
    {
        try {
            Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->usermessage, $request->useremail, $request->username));
            Contact::create($request->all());
            return redirect(route('contact.index'))->with('success_message', 'Your query submitted successfully!');
        } catch (\Exception $e) {
            return view('contact::error')->with('message', 'Oops! something went wrong. Please try again later.');
        }
    }
}
