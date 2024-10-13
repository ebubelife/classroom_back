<?php

namespace App\Http\Controllers;

use App\Models\Members;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\ConfirmEmail;





class MembersController extends Controller
{

    public function test_email(){

        try {
            Mail::to("ebubeemeka19@gmail.com")->send(new ConfirmEmail("0900"));
            return response()->json(['message' => 'Email sent successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }

    }
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

  $user->email_code = $randomNumber = rand(1000, 9999);

  if ($user->save()) {

    Mail::to($user->email)->send(new ConfirmEmail($randomNumber));
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
            'success' => true,
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

    public function verify_email(Request $request){

            // Validate the login request
        $validated = $request->validate([
            'user_id' => 'required',
            'code' => 'required|string',
        ]);

         // Retrieve the user by email
        $user = Members::find($validated['user_id']);

        if($user->email_code == $validated['code']){

               // Update the user's email_verified_at field

               $user->email_verified = true;
               $user->save();

               return response()->json([
                'success' => true,
                'status' => 'success',
                'message' => 'Email verified successfully!',
                'user' => $user,
            ], 200);

        }


    }

}
