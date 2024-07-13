<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Validation\Rules\File;
use App\Models\User;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request)
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::back()->with('status', 'profile-updated')->with('message', 'profile-updated')->with('message-color', 'alert-success');;
    }

    public function image(Request $request)
    {
        $request->validate([
            'profile_image' => ['bail', 'required', 'file', 'image', File::types(['jpeg', 'jpg', 'png', 'avif', 'webp'])->max('30mb')],
        ]);

        if ($request->hasFile('profile_image')) {
            $filename = trim(Auth::user()->firstname.' '.Auth::user()->lastname);
            $filename = str_replace(' ', '_',  $filename);
            $filename = filter_var($filename, FILTER_SANITIZE_STRING);
            $image_name = time().'.'.$request->profile_image->extension();
            $saved = $request->profile_image->storeAs('profile/images/'.$filename,  $image_name, 'public');
        }

        // $userdata =  User::find(Auth::user()->id);
        $request->user()->photo = $saved;
        $request->user()->save();

        return Redirect::back()->with('message', 'profile updated')->with('message-color', 'alert-success');;
    }


    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
