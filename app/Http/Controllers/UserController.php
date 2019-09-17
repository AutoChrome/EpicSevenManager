<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit(User $user)
    {
        $this->authorize('update', $user);
        return view('user/edit', compact('user'));
    }

    public function update(User $user)
    {
        $data = request()->validate([
            'username' => ['string', 'max:255', 'min:6', 'required'], 
            'ign' => '', 
            'email' => ['required', 'email'], 
        ]);
        
        auth()->user()->update($data);

        return redirect(route('home'));
    }
}
