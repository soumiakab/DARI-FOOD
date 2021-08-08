<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;

class LoginAdminController extends Controller
{
    //
    public function index()
    {
        return view('auth.loginAdmin');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);
        // dd($request->email);

        if(Auth::guard('admin')->attempt($this->credentials($request), $request->filled('remember'))){
            return redirect()->intended(route('admin'));
        }
        return redirect()->back();
    }

    protected function credentials(Request $request)
    {
        return $request->only('email', 'password');
    }

}
