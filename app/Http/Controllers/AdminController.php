<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Enrollment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | ADMIN DASHBOARD
    |--------------------------------------------------------------------------
    */

    public function dashboard()
    {
        $users = User::latest()->get();

        $totalUsers = User::count();

        $studentCount = User::where(
            'role',
            'student'
        )->count();

        $teacherCount = User::where(
            'role',
            'teacher'
        )->count();

        $adminCount = User::where(
            'role',
            'admin'
        )->count();


        // Course statistics

        $totalCourses = Course::count();

        $approvedCourses = Course::where(
            'status',
            'approved'
        )->count();

        $pendingCourses = Course::where(
            'status',
            'pending'
        )->count();

        $rejectedCourses = Course::where(
            'status',
            'rejected'
        )->count();


        return view(
            'admin.dashboard',
            compact(
                'users',
                'totalUsers',
                'studentCount',
                'teacherCount',
                'adminCount',
                'totalCourses',
                'approvedCourses',
                'pendingCourses',
                'rejectedCourses'
            )
        );
    }


    /*
    |--------------------------------------------------------------------------
    | USERS
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        $users = User::latest()->get();

        $totalUsers = User::count();

        $studentCount = User::where(
            'role',
            'student'
        )->count();

        $teacherCount = User::where(
            'role',
            'teacher'
        )->count();

        $adminCount = User::where(
            'role',
            'admin'
        )->count();


        // Course statistics

        $totalCourses = Course::count();

        $approvedCourses = Course::where(
            'status',
            'approved'
        )->count();

        $pendingCourses = Course::where(
            'status',
            'pending'
        )->count();

        $rejectedCourses = Course::where(
            'status',
            'rejected'
        )->count();


        return view(
            'admin.dashboard',
            compact(
                'users',
                'totalUsers',
                'studentCount',
                'teacherCount',
                'adminCount',
                'totalCourses',
                'approvedCourses',
                'pendingCourses',
                'rejectedCourses'
            )
        );
    }


    /*
    |--------------------------------------------------------------------------
    | CREATE USER
    |--------------------------------------------------------------------------
    */

    public function create()
    {
        return redirect()->route(
            'admin.dashboard'
        );
    }


    /*
    |--------------------------------------------------------------------------
    | STORE USER
    |--------------------------------------------------------------------------
    */

    public function store(Request $request)
    {
        $request->validate([

            'name' => [
                'required',
                'string',
                'max:255',
            ],

            'email' => [
                'required',
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

            'role' => [
                'required',
                'in:student,teacher,admin',
            ],

        ]);


        User::create([

            'name' => $request->name,

            'email' => $request->email,

            'password' => Hash::make(
                $request->password
            ),

            'role' => $request->role,

        ]);


        return redirect()
            ->route('admin.dashboard')
            ->with(
                'success',
                '✅ User created successfully!'
            );
    }


    /*
    |--------------------------------------------------------------------------
    | DELETE USER
    |--------------------------------------------------------------------------
    */

    public function delete($id)
    {
        $user = User::findOrFail($id);


        if ($user->id === auth()->id()) {

            return back()->with(
                'error',
                '❌ You cannot delete your own account.'
            );
        }


        $user->delete();


        return back()->with(
            'success',
            '✅ User deleted successfully!'
        );
    }


    /*
    |--------------------------------------------------------------------------
    | REJECT USER
    |--------------------------------------------------------------------------
    */

    public function rejectUser($id)
    {
        $user = User::findOrFail($id);


        if ($user->id === auth()->id()) {

            return back()->with(
                'error',
                '❌ You cannot reject your own account.'
            );
        }


        $user->delete();


        return back()->with(
            'success',
            '✅ User rejected and removed successfully!'
        );
    }


    /*
    |--------------------------------------------------------------------------
    | COURSES
    |--------------------------------------------------------------------------
    */

    public function courses()
    {
        $courses = Course::latest()->get();


        return view(
            'admin.courses',
            compact('courses')
        );
    }


    /*
    |--------------------------------------------------------------------------
    | APPROVE COURSE
    |--------------------------------------------------------------------------
    */

    public function approveCourse($id)
    {
        $course = Course::findOrFail($id);


        $course->status = 'approved';

        $course->save();


        return back()->with(
            'success',
            '✅ Course approved successfully!'
        );
    }


    /*
    |--------------------------------------------------------------------------
    | REJECT COURSE
    |--------------------------------------------------------------------------
    */

    public function rejectCourse($id)
    {
        $course = Course::findOrFail($id);


        $course->status = 'rejected';

        $course->save();


        return back()->with(
            'success',
            '❌ Course rejected successfully!'
        );
    }


    /*
    |--------------------------------------------------------------------------
    | DELETE COURSE
    |--------------------------------------------------------------------------
    */

    public function deleteCourse($id)
    {
        $course = Course::findOrFail($id);


        $course->delete();


        return back()->with(
            'success',
            '✅ Course deleted successfully!'
        );
    }


    /*
    |--------------------------------------------------------------------------
    | ENROLLMENTS
    |--------------------------------------------------------------------------
    */

    public function enrollments()
    {
        $enrollments = Enrollment::with([
            'student',
            'course'
        ])
        ->latest()
        ->get();


        $totalEnrollments =
            $enrollments->count();


        $activeEnrollments =
            $enrollments
                ->where('status', 'active')
                ->count();


        $completedEnrollments =
            $enrollments
                ->where('status', 'completed')
                ->count();


        $cancelledEnrollments =
            $enrollments
                ->where('status', 'cancelled')
                ->count();


        return view(
            'admin.enrollments',
            compact(
                'enrollments',
                'totalEnrollments',
                'activeEnrollments',
                'completedEnrollments',
                'cancelledEnrollments'
            )
        );
    }
    public function messages()
{
    return view('admin.messages');
}
}