<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterFormRequest;
use App\Models\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function create()
    {
        if (session()->has('previous-url')) {
            session()->flash('previous-url', session('previous-url'));
        }
        return view('auth.register');
    }

    public function store(RegisterFormRequest $request)
    {
        $user = User::create(request(['firstname','lastname', 'email', 'password']));
        auth()->login($user);
        return redirect()->to('/');
    }
}
