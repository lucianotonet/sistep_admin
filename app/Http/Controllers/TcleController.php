<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TcleController extends Controller
{
    public function accept(Request $request)
    {
        $user = Auth::user();
        $user->tcle_accepted = true;
        $user->tcle_accepted_at = now();
        $user->save();

        return response()->json(['success' => true]);
    }
}