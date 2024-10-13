<?php

namespace App\Http\Controllers;

use App\Models\Members;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Mail\VerifyEmail;
use Illuminate\Support\Facades\Mail;



class MembersController extends Controller
{
   public function signup(Request $request){

          // Validate the incoming request data
    $validated = $request->validate([
      'name' => 'required|string|max:255',
      'email' => 'required|email|unique:members,email|max:255',
      'password' => 'required|string|min:8',
  ]);

  // Hash the password
  $hashedPassword = bcrypt($validated['password']);

  // Create a new user and save to the database
  $user = new Members();
  $user->name = $validated['name'];
  $user->email = $validated['email'];
  $user->password = $hashedPassword;

  $user->email_code = $randomNumber = rand(100000, 999999);

  if ($user->save()) {

    Mail::to($user->email)->send(new VerifyEmail($randomNumber));
      // Return success response as JSON
      return response()->json([
         'success' => true,
          'status' => 'success',
          'message' => 'User registered successfully!',
          'user' => $user,
      ], 200);
  } else {
      // Return error response as JSON
      return response()->json([
         'success' => false,
          'status' => 'error',
          'message' => 'Failed to register user.',
      ], 400);
  }

   }


   public function login(Request $request)
{
    // Validate the login request
    $validated = $request->validate([
        'email' => 'required|email',
        'password' => 'required|string',
    ]);

    // Retrieve the user by email
    $user = Members::where('email', $validated['email'])->first();

    // Check if user exists and the password is correct
    if ($user && Hash::check($validated['password'], $user->password)) {
        // Generate a token (optional, if using token-based authentication like JWT or Sanctum)
        // Example: $token = $user->createToken('auth_token')->plainTextToken;

        // Return success response as JSON
        return response()->json([
            'status' => 'success',
            'message' => 'Login successful!',
            'user' => $user,
            // 'token' => $token, // If using token-based auth
        ], 200);
    } else {
        // Return error response as JSON
        return response()->json([
            'status' => 'error',
            'message' => 'Invalid email or password.',
        ], 401);
    }
}

}
