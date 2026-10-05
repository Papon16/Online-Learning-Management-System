<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Show Contact Page
     */
    public function index()
    {
        return view('contact');
    }


    /**
     * Store Contact Message
     */
    public function store(Request $request)
    {
        $validated = $request->validate([

            'name' => [
                'required',
                'string',
                'max:255',
            ],

            'email' => [
                'required',
                'email',
                'max:255',
            ],

            'subject' => [
                'required',
                'string',
                'max:255',
            ],

            'message' => [
                'required',
                'string',
                'max:5000',
            ],

        ]);


        ContactMessage::create([

            'name' => $validated['name'],

            'email' => $validated['email'],

            'subject' => $validated['subject'],

            'message' => $validated['message'],

            'status' => 'unread',

        ]);


        return redirect()
            ->route('contact')
            ->with(
                'success',
                'Thank you! Your message has been sent successfully.'
            );
    }
}