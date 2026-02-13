<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login(Request $request){
            $request->validate([
        'username' => 'required|string',
        'password' => 'required|string',
    ]);
          $admin = Admin::where('adminname', $request->username)
                  ->where('adminpassword', $request->password)
                  ->first();
          
         
          if ($admin) {
               $request->session()->regenerate();
               
            session([
                'admin_login' => true,
                'name' => $request->username,
                'password' => $request->password,
            ]);
        return redirect()->route('data')->with('success', 'Login successful');
    } else {
        return redirect()->back()->with('error', 'Invalid admin name or password');
    }
    }

    public function logout(Request $request)
{
    // poori session clear
    $request->session()->flush();

    // extra safety
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect()->route('/index')->with('success', 'Logged out successfully');
}

}
