<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\Project;

use Illuminate\Http\Request;

class DataController extends Controller
{   
    public function data(){
        $project= Project::all();
        return view('admins.projects',['project'=>$project]);
    }

    public function create(Request $request){
          $request->validate([
            'project_name' => 'required',
            'description' => 'required',
            'project_img' => 'required|image|mimes:jpg,png,jpeg|max:2048',
        ]);
         $file = $request->file('project_img');

        $filename = time().'.'.$file->getClientOriginalExtension();

        $file->move(public_path('images'),$filename);

        $path = $filename;
      

       Project::insert([
            'name' => $request->project_name,
            'description' => $request->description,
            'image' => $path,
        ]);
      
        return redirect()->back()->with('success', 'Project Created Successfully');

        
    }

    public function edit($id){
        $project = Project::findorFail($id);
        return view('updateproject',compact('project'));
    }
   public function update(Request $request, $id)
    {
        $project = Project::findorFail($id);

        $request->validate([
            'project_name' => 'required',
            'description' => 'required',
            'project_img' => 'required|image|mimes:jpg,png,jpeg|max:2048',
        ]);


        $file = $request->file('project_img');

        $filename = time().'.'.$file->getClientOriginalExtension();

        $file->move(public_path('images'),$filename);

        $path = $filename;

      
         Project::where('id', $id)->update([
    'name' => $request->project_name,
    'description' => $request->description,
    'image' => $path,
]);

    return redirect()->back()->with('success','Project Updated Successfully');
}

public function delete($id)
{
    // Find project by ID
    $project = Project::findOrFail($id); 

    $project->delete();

    return redirect()->back()->with('success', 'Project Deleted Successfully');
}

}

   
