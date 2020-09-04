<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Monolog\Handler\IFTTTHandler;

class VerifyOTPController extends Controller
{
    public function verify(Request $request) {
        if (request('OTP')===Cache::get('OTP')) {
            auth()->user()->update(['isVerified'=>true]);
            return response(null,201);
        }
    }
}
