<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class Signup extends Controller
{
    //
    public function createUser(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required|min:6|regex:/[0-9]/',
            ],
            [
                'name.required' => 'Nama jangan kosong',
                'email.required' => 'Email jangan kosong',
                'password.required' => 'Kata sandi jangan kosng',
                'password.min' => 'Kata sandi minimal enam huruf',
                'password.regex'  => 'Kata sandi harus mengandung setidaknya satu angka',
            ],
        );

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'role'=>'customer'
        ]);

        return redirect()->route('login-page');
    }
}
