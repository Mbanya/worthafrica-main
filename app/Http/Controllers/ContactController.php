<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function __invoke(ContactRequest $request)
    {
        $validated = $request->validated();

        Mail::to('info@worthafrica.org')->send(
            new ContactMail(
                name: $validated['name'],
                phone: $validated['phone'],
                email: $validated['email'],
                message: $validated['message']
            )
        );

        return back()->with('success', 'Thank you for contacting us! We will get back to you soon.');
    }
}
