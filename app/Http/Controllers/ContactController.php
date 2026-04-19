<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display the contact form
     */
    public function show()
    {
        return view('contact');
    }

    /**
     * Store a new contact submission
     */
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'company' => 'nullable|string|max:255',
                'help_type' => 'required|string',
                'message' => 'required|string|min:10',
                'timeline' => 'nullable|string',
            ], [
                'name.required' => 'Please enter your name.',
                'email.required' => 'Please enter your email address.',
                'email.email' => 'Please enter a valid email address.',
                'help_type.required' => 'Please select how we can help you.',
                'message.required' => 'Please tell us about your project.',
                'message.min' => 'Please provide more details about your project (at least 10 characters).',
            ]);

            Contact::create($validated);

            return back()->with('success', 'Thank you for reaching out! We\'ll respond within 24 hours.');

        } catch (\Illuminate\Validation\ValidationException $e) {
            return back()->withErrors($e->validator)->withInput();
        } catch (\Exception $e) {
            return back()->with('error', 'Something went wrong. Please try again or email us at support@open10.dev')->withInput();
        }
    }
}
