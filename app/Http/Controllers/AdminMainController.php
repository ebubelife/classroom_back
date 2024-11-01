<?php

namespace App\Http\Controllers;

use App\Models\AdminMain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Members;
use Illuminate\Support\Facades\Hash;

class AdminMainController extends Controller
{
    public function dashboard()
    {
        return view('admin_dashboard');
    }

    public function subjects()
    {
        return view('admin_subjects');
    }
   
   

   


    public function login_admin_user(Request $request)
    {
       // Validate the login form data
    $request->validate([
        
        'username' => 'required|string',
        'password' => 'required|string',
    ]);

    // Find the admin user by username
    $adminUser = AdminMain::where('username', $request->username)->first();

    // Check if the user exists and the password is correct
    if ($adminUser && Hash::check($request->password, $adminUser->password)) {
        // Log in the admin user
      // Define the array to save in the session
    $adminData = [
        'id' => $adminUser->id,
        'name' => $adminUser->name,
        'username' => $adminUser->username,
        'role' => 'admin',  // Assuming a role value, add more keys if needed
    ];

    // Store the array in the session
    session(['admin_data' => $adminData]);
        // Redirect to the dashboard
        return redirect()->route('admin.dashboard');
    } else {
        // Redirect back with an error message
        return redirect()->back()->withErrors(['login' => 'Invalid username or password.']);
    }
    }

    public function get_users(Request $request)
{

      $users = Members::all();
      return view('admin_users', ['users' => $users, 'count' => $users->count()]);
      
}

}
