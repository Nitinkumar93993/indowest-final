<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;

class OTPController extends Controller
{
    public function sendOTP(Request $request)
    {
        // Your Twilio Account SID and Auth Token
        $sid = 'YOUR_TWILIO_ACCOUNT_SID';
        $token = 'YOUR_TWILIO_AUTH_TOKEN';
        $twilio = new Client($sid, $token);

        // Generate a 6-digit OTP
        $otp = mt_rand(100000, 999999);

        // Get the mobile number and country code from the request
        $countryCode = $request->input('countryCode');
        $mobileNumber = $request->input('mobileNumber');

        // Format mobile number
        $to = '+' . $countryCode . $mobileNumber;

        // Send the OTP via Twilio
        $message = $twilio->messages->create(
            $to,
            [
                'from' => 'YOUR_TWILIO_PHONE_NUMBER',
                'body' => "Your OTP is: $otp"
            ]
        );

        // You may handle success or failure here as per your requirement
        return response()->json(['message' => 'OTP sent successfully']);
    }
}
