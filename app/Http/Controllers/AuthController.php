<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register()
    {
        return view('/register');
    }

    public function register_proses(Request $request)
    {
        $data['name']   = $request->name;
        $data['email']      = $request->email;
        $data['password']   = Hash::make($request->password);

        $user= User::create($data);

        return redirect('');
    }
}
