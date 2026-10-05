<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | LOGIN
    |--------------------------------------------------------------------------
    */

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'role' => 'required|in:admin,teacher,student',
        ]);


        /*
        |--------------------------------------------------------------------------
        | LOGIN WITH EMAIL + PASSWORD + ROLE
        |--------------------------------------------------------------------------
        */

        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
            'role' => $request->role,
        ])) {

            $request->session()->regenerate();

            $user = Auth::user();


            /*
            |--------------------------------------------------------------------------
            | ROLE-WISE REDIRECT
            |--------------------------------------------------------------------------
            */

            if ($user->role === 'admin') {

                return redirect()->route('admin.dashboard');

            }

            if ($user->role === 'teacher') {

                return redirect()->route('teacher.dashboard');

            }

            if ($user->role === 'student') {

                return redirect()->route('student.dashboard');

            }
        }


        /*
        |--------------------------------------------------------------------------
        | LOGIN FAILED
        |--------------------------------------------------------------------------
        */

        return back()
            ->withInput($request->only('email', 'role'))
            ->with(
                'error',
                '❌ Invalid email, password, or selected role.'
            );
    }


    /*
    |--------------------------------------------------------------------------
    | LOGOUT
    |--------------------------------------------------------------------------
    */

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login')
            ->with(
                'success',
                '✅ You have been logged out successfully.'
            );
    }


    /*
    |--------------------------------------------------------------------------
    | REGISTER
    |--------------------------------------------------------------------------
    */

  public function register(Request $request)
{
    /*
    |--------------------------------------------------------------------------
    | Validate Registration
    |--------------------------------------------------------------------------
    | Public registration is ONLY for students.
    | Teacher and Admin accounts cannot be created publicly.
    |--------------------------------------------------------------------------
    */

    $request->validate([

        'name' => [
            'required',
            'string',
            'max:255',
        ],

        'email' => [
            'required',
            'string',
            'email',
            'max:255',
            'unique:users,email',
        ],

        'password' => [
            'required',
            'string',
            'min:8',
            'confirmed',
        ],

    ]);


    /*
    |--------------------------------------------------------------------------
    | Create Student Account
    |--------------------------------------------------------------------------
    */

    User::create([

        'name' => $request->name,

        'email' => $request->email,

        'password' => Hash::make(
            $request->password
        ),

        // Public registration = Student only
        'role' => 'student',

    ]);


    /*
    |--------------------------------------------------------------------------
    | Registration Successful
    |--------------------------------------------------------------------------
    */

    return redirect()
        ->route('login')
        ->with(
            'success',
            '✅ Student account created successfully! Please login.'
        );
}
}