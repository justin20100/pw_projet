<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterFormRequest;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Uploads\HandlesImageUploads;
use Intervention\Image\Facades\Image;

class RegistrationController extends Controller
{
    use HandlesImageUploads;

    public function create()
    {
        if (session()->has('previous-url')) {
            session()->flash('previous-url', session('previous-url'));
        }
        return view('auth.register');
    }

    public function store(RegisterFormRequest $request)
    {
        $avatar = $this->resizeAndSave($request->file('avatar'));
        $user = User::create(request(['firstname','lastname', 'email', 'password']),$avatar);
        auth()->login($user);
        return redirect()->to('/');
    }
}
