<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    // Show profile
    public function index()
    {
        $about = About::first();
        return view('admins.aboutme', compact('about'));
    }
  public function update(Request $request, $id)
{
    $request->validate([
        'para1'  => 'required',
        'para2' => 'required',
        'experience' => 'required',
        'projects' => 'required',
        'working' => 'required',
        'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
    ]);

    // Pehle old image le lo
    $about = About::findOrFail($id);
    $filename = $about->image; // default = old image

    // Agar new image upload hui
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('images'), $filename);
    }

    // SAME STYLE update (jaisa aap kar rahi ho)
    About::where('id', $id)->update([
        'para1'        => $request->para1,
        'para2' => $request->para2,
        'image'       => $filename,
        'experience'       => $request->experience,
        'projects'       => $request->projects,
        'working'       => $request->working,
    ]);

    return redirect()->back()->with('success', 'Profile Updated Successfully');
}

}
