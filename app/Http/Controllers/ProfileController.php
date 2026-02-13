<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    // Show profile
    public function index()
    {
        $profile = Home::first();
        return view('admins.myhome', compact('profile'));
    }

  public function update(Request $request, $id)
{
    $request->validate([
        'name'  => 'required',
        'about' => 'required',
        'title' => 'required',
        'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
    ]);

    // Pehle old image le lo
    $profile = Home::findOrFail($id);
    $filename = $profile->image; // default = old image

    // Agar new image upload hui
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('images'), $filename);
    }

    // SAME STYLE update (jaisa aap kar rahi ho)
    Home::where('id', $id)->update([
        'name'        => $request->name,
        'description' => $request->about,
        'image'       => $filename,
        'title'       => $request->title,
    ]);

    return redirect()->back()->with('success', 'Profile Updated Successfully');
}

}
