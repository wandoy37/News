<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::all()->first();
        return view('dashboard.contact', compact('contact'));
    }

    public function update(ContactRequest $request, $id)
    {
        $contact = Contact::find($id);

        $data = [
            'title' => $request->title,
            'address' => $request->address,
            'telephone' => $request->telephone,
            'email' => $request->email,
            'twitter' => $request->twitter,
            'facebook' => $request->facebook,
            'whatsapp' => $request->whatsapp,
            'instagram' => $request->instagram,
            'map' => $request->map,
        ];

        $contact->update($data);
        return redirect(route('contact'));
    }
}
