<?php

namespace App\Http\Controllers;

use Mail;
use App\Models\ContactForm;
use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use App\Http\Controllers\Controller;


class ContactFormController extends Controller
{
    public function contactFormSubmission(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'subject' => 'nullable|string|max:255',
            'comment' => 'nullable|string',
        ]);


            $contact = ContactForm::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'phone' => $validated['phone'] ?? null,
                'subject' => $validated['subject'] ?? null,
                'comment' => $validated['comment'] ?? null,
            ]);

            $data = [
                'name' => $contact->name,
                'email' => $contact->email,
                'phone' => $contact->phone,
                'subject' => $contact->subject,
                'user_message' => $contact->comment,
            ];

                try {

            Mail::to('no-reply@stafholdgroup.com')->send(new ContactFormMail($data));

            return back()->with('success', 'Thank you — your message was sent successfully.');
        } catch (\Exception $e) {
            // Log the error in real app
            return back()->with('error', 'Sorry — we could not send your message. Please try again later.');
        }
    }
}
