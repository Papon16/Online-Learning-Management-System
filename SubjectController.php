<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use App\Models\Course;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index()
    {
        $subjects = Subject::with('course')->get();
        return view('admin.subjects.index', compact('subjects'));
    }

    public function create()
    {
        $courses = Course::all();
        return view('admin.subjects.create', compact('courses'));
    }

    public function store(Request $request)
    {
        Subject::create($request->all());
        return redirect()->route('subjects.index');
    }
}