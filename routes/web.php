<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubmissionController;
use App\Http\Controllers\TeacherController;


/*
|--------------------------------------------------------------------------
| PUBLIC ROUTES
|--------------------------------------------------------------------------
*/


// =====================================================
// HOME
// =====================================================

Route::get('/', function () {

    $instructors = \App\Models\User::where('role', 'teacher')
        ->latest()
        ->take(4)
        ->get();

    return view('welcome', compact('instructors'));

})->name('home');


// =====================================================
// ABOUT
// =====================================================

Route::get('/about', function () {
    return view('about');
})->name('about');


// =====================================================
// AUTHENTICATION
// =====================================================


// Login Page
Route::get('/login', function () {
    return view('login');
})->name('login');


// Login Submit
Route::post('/login', [AuthController::class, 'login'])
    ->name('login.submit');


// Register Page
Route::get('/register', function () {
    return view('register');
})->name('register');


// Register Submit
Route::post('/register', [AuthController::class, 'register'])
    ->name('register.submit');


// Logout
Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout');


// =====================================================
// CONTACT
// =====================================================

Route::get('/contact', [ContactController::class, 'index'])
    ->name('contact');

Route::post('/contact', [ContactController::class, 'store'])
    ->name('contact.store');


// =====================================================
// INSTRUCTORS
// =====================================================

Route::get('/instructors', function () {

    $instructors = \App\Models\User::where('role', 'teacher')
        ->latest()
        ->get();

    return view('instructors', compact('instructors'));

})->name('instructors');



/*
|--------------------------------------------------------------------------
| AUTHENTICATED USER ROUTES
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {


    // =================================================
    // PROFILE
    // =================================================

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');


    // =================================================
    // DEFAULT DASHBOARD
    // =================================================

    Route::get('/dashboard', function () {

        $user = auth()->user();


        // Admin
        if ($user->role === 'admin') {
            return redirect()->route('admin.dashboard');
        }


        // Teacher
        if ($user->role === 'teacher') {
            return redirect()->route('teacher.dashboard');
        }


        // Student
        return redirect()->route('student.dashboard');

    })->name('dashboard');



    /*
    |--------------------------------------------------------------------------
    | ADMIN ROUTES
    |--------------------------------------------------------------------------
    | Only admin users can access these routes.
    |
    */

    Route::middleware('role:admin')
        ->prefix('admin')
        ->group(function () {


            // =================================================
            // ADMIN DASHBOARD
            // =================================================

            Route::get('/dashboard', [AdminController::class, 'dashboard'])
                ->name('admin.dashboard');


Route::get('/messages', [AdminController::class, 'messages'])
    ->name('admin.messages');
            // =================================================
            // USERS
            // =================================================

            // All Users
            Route::get('/users', [AdminController::class, 'index'])
                ->name('admin.users');


            // Create User Page
            Route::get('/users/create', [AdminController::class, 'create'])
                ->name('admin.users.create');


            // Store User
            Route::post('/users/store', [AdminController::class, 'store'])
                ->name('admin.users.store');


            // Delete User
            Route::delete('/users/{id}', [AdminController::class, 'delete'])
                ->name('admin.users.delete');


            // Reject User
            Route::delete('/users/reject/{id}', [AdminController::class, 'rejectUser'])
                ->name('admin.user.reject');



            // =================================================
            // COURSES
            // =================================================

            // All Courses
            Route::get('/courses', [AdminController::class, 'courses'])
                ->name('admin.courses');


            // Approve Course
            Route::post('/course/{id}/approve', [AdminController::class, 'approveCourse'])
                ->name('admin.course.approve');


            // Reject Course
            Route::delete('/course/{id}/reject', [AdminController::class, 'rejectCourse'])
                ->name('admin.course.reject');


            // Delete Course
            Route::delete('/course/{id}/delete', [AdminController::class, 'deleteCourse'])
                ->name('admin.course.delete');



            // =================================================
            // ENROLLMENTS
            // =================================================

            // All Enrollments
            Route::get('/enrollments', [AdminController::class, 'enrollments'])
                ->name('admin.enrollments');

        });

});