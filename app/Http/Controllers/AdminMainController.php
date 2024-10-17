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

    if (Auth::guard('admin')->attempt(['username' => $request->username, 'password' => $request->password])) {
    return redirect()->route('admin.dashboard');
} else {
    return redirect()->back()->withErrors(['login' => 'Invalid username or password.']);
}
    }

}
