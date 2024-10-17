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
        Auth::login($adminUser);

        // Redirect to the dashboard
        return redirect()->route('admin.dashboard');
    } else {
        // Redirect back with an error message
        return redirect()->back()->withErrors(['login' => 'Invalid username or password.']);
    }
    }

}
