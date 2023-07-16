<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function list()
    {
        $contacts = Contact::all();

        return view('admin.pages.feedback.list')->with('contacts', $contacts);
    }

    public function submit(Request $request)
    {
        // Lấy thông tin từ form gửi lên
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $content = $request->input('content');

        $contact = new Contact();
        $contact->name = $name;
        $contact->email = $email;
        $contact->phone = $phone;
        $contact->content = $content;
        $contact->save();

        return back()->with('message', 'Your message has been sent successfully!');
    }
}
