<?php

// app/Http/Controllers/NewsletterController.php
namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:newsletters,email',
        ]);

        Newsletter::create($validated);

        return redirect()->route('subscribe.success');
    }

    public function success()
    {
        return view('pages.subscribe-success');
    }
}
