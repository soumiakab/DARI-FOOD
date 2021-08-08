<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;

class LoginChefController extends Controller
{
    //
    public function index()
    {
        return view('auth.loginChef');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);

        if(Auth::guard('chef')->attempt($this->credentials($request), $request->filled('remember'))){
            return redirect()->intended(route('chef'));
        }
        return redirect()->back();
    }

    protected function credentials(Request $request)
    {
        return $request->only('email', 'password');
    }
}
