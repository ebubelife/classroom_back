<?php

namespace App\Http\Controllers;

use App\Models\AdminMain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

    public function add_subjects(Request $request)
    {
        if ($request->isMethod('post')) {
            // Validate the input
            $request->validate([
                'subject' => 'required|string|max:255',
            ]);
    
            // Store the subject (assuming you have a Subject model)
           /* Subject::create([
                'name' => $request->input('subject'),
            ]);*/
    
            // Redirect back with a success message
            return redirect()->route('admin.subjects.add')->with('success', 'Subject added successfully!');
        }
    
        // If the request method is GET, simply display the form
        return view('admin_subjects_add');
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

}
