<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\UserSignUp;

class UserSignUpController extends Controller
{


    public function insertData(Request $request)
    {
        // Check if password and confirm password match
        if ($request['password'] !== $request['confirmPassword']) {
            // Handle password mismatch error
            return response()->json(['error' => 'Password and confirm password do not match'], 422);
        }

        // Generate a unique ID
        $uniqueId = Str::uuid();

        // Passwords match, continue with registration
        $user = new UserSignUp;
        $user->phoneNumber = $request['phoneNumber'];
        $user->firstName = $request['firstName'];
        $user->lastName = $request['lastName'];
        $user->useremail = $request['useremail'];
        $user->userdob = $request['userdob'];
        $user->referance_platform = $request['referance_platform'];
        $user->userCity = $request['userCity'];
        $user->Interested_Services = $request['Interested_Services'];
        $user->confirmPassword = $request['confirmPassword']; // Set the confirmPassword field
        $user->UniqueID = $uniqueId; // Set the UniqueID field

        // Hash the password before saving
        $user->password = Hash::make($request['password']);

        // Save the user
        $user->save();

        // Optionally, you can return a success response with the unique ID
        return response()->json(['message' => 'User registered successfully', 'uniqueId' => $uniqueId], 200);
    }


    public function login(Request $request)
    {
        // Validate the incoming request data


        // Determine the login type and corresponding field name
        $loginType = $request->input('loginType');
        $loginField = '';

        switch ($loginType) {
            case 'canumber':
                $loginField = 'phoneNumber';
                break;
            case 'meemail':
                $loginField = 'userEmail';
                break;
            case 'me':
                $loginField = 'UniqueID';
                break;
            default:
                // Handle invalid login type
                return response()->json(['error' => 'Invalid login type'], 422);
        }
        // Attempt to authenticate the user
        $user = UserSignUp::where($loginField, $request->input($loginField))->first();
        if (!$user || !Hash::check($request->input('password'), $user->password)) {
            // Authentication failed
            return response()->json(['error' => 'Invalid credentials'], 401);
        }
        // Authentication successful
        // You can now proceed with your logic for authenticated users
        // For example, you can return a success response or redirect the user

        // return  response()->json(['message' => 'Login successful'], 200);
        return redirect("/dashboard");
        // , 'user' => $user
    }
}
