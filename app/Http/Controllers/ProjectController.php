<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use App\Models\Project;
use App\Models\Work;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
     function show(){
        $records = Project::all();
         $data = Work::all();
        return view('home', ['records' => $records,'data' => $data]);
     }


function viewpdf()
{
    $filePath = 'image/suman.pdf'; // folder + file name

    if (!Storage::disk('public')->exists($filePath)) {
        abort(404);
    }

    return response()->file(
        storage_path('app/public/' . $filePath),
        [
            'Content-Disposition' => 'inline; filename="suman.pdf"'
        ]
    );
}


public function mailmsg(Request $request)
{
    $request->validate([
        'emailforsubscribe' => 'required|email'
    ], [
        'emailforsubscribe.required' => 'Plz Enter Your Email',
        'emailforsubscribe.email' => 'Email must be in Email Format'
    ]);

    Mail::raw('Thanks for subscribing to my portfolio website!', function ($message) use ($request) {
        $message->to($request->email)
                ->subject('Subscription Successful');
    });

    return back()->with('success', 'Thanks for Subscribing!');
}

public function form(Request $request)
{
    $request->validate([
        'name'    => 'required|max:100',
        'email'   => 'required|email',
        'message' => 'required',
    ],[
        'name.required' => 'Name Can not be empty',
        'name.max' => 'Name Length not greater than 100',
        'email.required' => 'Email Must be Enter',
        'email.email' => 'Email must be a valid email',
        'message.required' => 'Message must be enter',
    ]);

    $mailBody = "
        Name: {$request->name}
        Email: {$request->email}

        Message:
        {$request->message}
    ";

    Mail::raw($mailBody, function ($message) use ($request) {
        $message->to('sumankhundiya75@gmail.com')
                ->subject('Contact Form Submission')
                ->replyTo($request->email, $request->name);
    });

    return back()->with('success', 'Data is Submitted ✅');
}

}

