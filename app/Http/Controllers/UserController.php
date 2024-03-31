<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;

class UserController extends Controller
{
    
    public function checkEmailAvailability(Request $request){
        $email = $request->input('email');
    
        // Check if the email exists in the database
        $user = User::where('email', $email)->first();
    
        if ($user) {
            // Email already exists, return error response
            return response()->json(['error' => 'Email already registered'], 400);
        }
    
        // Email is available, return success response
        return response()->json(['message' => 'Email is available']);
        }
        
        public function sendPasswordResetLink(Request $request){
        $request->validate(['email' => 'required|email']);
    
        // Check if the user with the provided email exists
        $user = User::where('email', $request->email)->first();
    
        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }
    
        // If the user exists, send the password reset link
        $status = Password::sendResetLink(
            $request->only('email')
        );
    
        if ($status === Password::RESET_LINK_SENT) {
            return response()->json(['message' => 'Password reset link sent successfully']);
        } else {
            return response()->json(['error' => 'Failed to send password reset link'], 500);
        }
        }
        
        public function show($id)
        {
            $user = User::find($id);
    
            if (!$user) {
                return response()->json(['error' => 'User not found'], 404);
            }
    
            return response()->json(['user' => $user]);
        }
        
        public function login(Request $request)
        {
        $credentials = $request->only('email', 'password');
    
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            $user = Auth::user();
            $token = $user->createToken('API Token')->plainTextToken;
            return response()->json(['user' => $user, 'token' => $token]);
        }
    
        // Authentication failed...
        return response()->json(['error' => 'Unauthorized'], 401);
        }
    

    public function index() {
        $users = User::all();
        return response()->json(['message' => 'GET request received successfully', 'data' => $users]);
    }
    
    public function store(Request $request) {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password); 
    
        $user->save();
    
        return response()->json(['user' => $user]); 
    }

    public function update(Request $request, $id) {
        $user = User::find($id);
    
        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }
    
        $user->name = $request->name;
        $user->email = $request->email;
        
        if ($request->has('password')) {
            $user->password = bcrypt($request->password);
        }
    
        $user->save();
    
        return response()->json(['user' => $user]);
    }

    public function destroy($id) {
        $room = User::find($id);
        $room->delete();
        return response()->json(['message' => "Successfully deleted!"]);
    }
}
