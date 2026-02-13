<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Show profile
    public function index()
    {
        $contact = Contact::first();
        return view('admins.contactme', compact('contact'));
    }

  public function update(Request $request, $id)
{
    $request->validate([
        'email'  => 'required|email',
        'number' => 'required',
        'location' => 'required',
    ]);

    // Pehle old image le lo
    $contact = Contact::findOrFail($id);

    Contact::where('id', $id)->update([
        'email'        => $request->email,
        'number'        => $request->number,
        'location'        => $request->location,
    ]);

    return redirect()->back()->with('success', 'Contact Updated Successfully');
}

}
