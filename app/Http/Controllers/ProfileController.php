<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function update(Request $request): RedirectResponse {
        $user = Auth::user();

        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'email|required|string',
        ]);

        $user->update($validatedData);
        return redirect()->route('dashboard')->with('success', 'Profile updated successfully!');
    }
}
