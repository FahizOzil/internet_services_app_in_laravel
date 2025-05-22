<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Mail\ContactFormMail;
use Log;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Validate the form data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'service' => 'nullable|string|in:internet,tv,bundle,support,other',
            'message' => 'required|string|max:2000',
            'consent' => 'required|accepted',
        ], [
            'name.required' => 'Please enter your full name.',
            'email.required' => 'Please enter your email address.',
            'email.email' => 'Please enter a valid email address.',
            'phone.required' => 'Please enter your phone number.',
            'message.required' => 'Please enter your message.',
            'consent.required' => 'You must agree to be contacted.',
            'consent.accepted' => 'You must agree to be contacted.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            // Prepare the data for the email
            $contactData = [
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'service' => $request->service ?? 'Not specified',
                'message' => $request->message,
                'submitted_at' => now()->format('F j, Y \a\t g:i A'),
            ];

            // Send email to your address
            Mail::to('support@internetandcabledeals.com')->cc('fahizozil17@gmail.com')->send(new ContactFormMail($contactData));


            // Redirect back with success message
            return redirect()->back()->with('success', 'Thank you for your message! We\'ll get back to you within 24 hours.');

        } catch (\Exception $e) {
            // Log the error for debugging
            dd($e->getMessage());
            \Log::error('Contact form email failed: ' . $e->getMessage());

            return redirect()->back()
                ->with('error', 'Sorry, there was an issue sending your message. Please try again or call us directly.')
                ->withInput();
        }
    }
}
