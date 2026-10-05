<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Show profile page
     */
    public function edit()
    {
        return view('profile.edit', [
            'user' => Auth::user(),
        ]);
    }


    /**
     * Update profile
     */
    public function update(Request $request)
    {
        $user = Auth::user();

        /*
        |--------------------------------------------------------------------------
        | Validate Profile
        |--------------------------------------------------------------------------
        */

        $request->validate([
            'name' => [
                'required',
                'string',
                'max:255',
            ],

            'profile_image' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:10240',
            ],
        ], [
            'name.required' => 'Name is required.',

            'profile_image.image' =>
                'The profile image must be a valid image.',

            'profile_image.mimes' =>
                'Profile image must be JPG, JPEG, PNG, or WEBP.',

            'profile_image.max' =>
                'Profile image must not be greater than 10MB.',
        ]);


        /*
        |--------------------------------------------------------------------------
        | Update Name
        |--------------------------------------------------------------------------
        */

        $user->name = $request->name;


        /*
        |--------------------------------------------------------------------------
        | Upload New Profile Image
        |--------------------------------------------------------------------------
        */

        if ($request->hasFile('profile_image')) {

            /*
            | Delete old profile image
            */

            if (
                $user->profile_image &&
                Storage::disk('public')->exists($user->profile_image)
            ) {

                Storage::disk('public')->delete(
                    $user->profile_image
                );
            }


            /*
            | Store new image
            */

            $path = $request
                ->file('profile_image')
                ->store('profile-images', 'public');


            /*
            | Save image path
            */

            $user->profile_image = $path;
        }


        /*
        |--------------------------------------------------------------------------
        | Save User
        |--------------------------------------------------------------------------
        */

        $user->save();


        /*
        |--------------------------------------------------------------------------
        | Redirect
        |--------------------------------------------------------------------------
        */

        return back()->with(
            'success',
            '✅ Profile updated successfully!'
        );
    }


    /**
     * Delete account
     */
    public function destroy(Request $request)
    {
        $user = Auth::user();


        /*
        |--------------------------------------------------------------------------
        | Delete Profile Image
        |--------------------------------------------------------------------------
        */

        if (
            $user->profile_image &&
            Storage::disk('public')->exists($user->profile_image)
        ) {

            Storage::disk('public')->delete(
                $user->profile_image
            );
        }


        /*
        |--------------------------------------------------------------------------
        | Logout
        |--------------------------------------------------------------------------
        */

        Auth::logout();


        /*
        |--------------------------------------------------------------------------
        | Delete User
        |--------------------------------------------------------------------------
        */

        $user->delete();


        /*
        |--------------------------------------------------------------------------
        | Invalidate Session
        |--------------------------------------------------------------------------
        */

        $request->session()->invalidate();

        $request->session()->regenerateToken();


        /*
        |--------------------------------------------------------------------------
        | Redirect
        |--------------------------------------------------------------------------
        */

        return redirect('/')
            ->with(
                'success',
                '✅ Your account has been deleted successfully.'
            );
    }
}