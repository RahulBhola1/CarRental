<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function send(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:100',
            'phone'   => 'required|string|max:20',
            'message' => 'required|string|max:1000',
        ]);

        // In production: Mail::to('rajbircarrental@gmail.com')->send(new ContactMail($request->all()));

        return back()->with('success', 'Message received! We\'ll get back to you within an hour. 🙏');
    }
}
