<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CarsController extends Controller
{
    public function index()
    {
        return view('cars');
    }

    public function inquiry(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:100',
            'phone'   => 'required|string|max:20',
            'message' => 'nullable|string|max:500',
        ]);

        // In production, send an email or save to DB here:
        // Mail::to('rajbircarrental@gmail.com')->send(new InquiryMail($request->all()));

        return back()->with('success', 'Thank you! We will call you back shortly to confirm your booking.');
    }
}
