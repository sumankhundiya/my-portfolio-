<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    // Show profile
    public function index()
    {
        $Skill = Skill::all();
        return view('admins.myskill', compact('Skill'));
    }

    
    public function create(Request $request){
          $request->validate([
            'name' => 'required',
            'value' => 'required',
        ]);
       Skill::insert([
            'name' => $request->name,
            'value' => $request->value,
        ]);
      
        return redirect()->back()->with('success', 'Project Created Successfully');

        
    }
  public function update(Request $request)
{
    $request->validate([
        'id' => 'required',
        'name'  => 'required',
        'value' => 'required',
    ]);

    // Pehle old image le lo
    // $Skill = Skill::findOrFail($id);

    // SAME STYLE update (jaisa aap kar rahi ho)
    Skill::where('id', $request->id)->update([
        'name'        => $request->name,
        'value' => $request->value,
    ]);

    return redirect()->back()->with('success', 'Skill Updated Successfully');
}
public function delete($id)
{
    // Find project by ID
    $Skill = Skill::findOrFail($id); 

    $Skill->delete();

    return redirect()->back()->with('success', 'Project Deleted Successfully');
}

}
