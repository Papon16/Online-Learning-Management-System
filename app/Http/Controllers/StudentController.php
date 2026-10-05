<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use App\Models\Course;
use App\Models\LiveClass;
use App\Models\Submission;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | STUDENT DASHBOARD
    |--------------------------------------------------------------------------
    */

    public function dashboard()
    {
        $user = auth()->user();


        /*
        |--------------------------------------------------------------------------
        | ENROLLED COURSES
        |--------------------------------------------------------------------------
        */

        $enrolledCourses = $user->enrolledCourses()
            ->with([
                'teacher',
                'assignments',
                'liveClasses',
                'recordedClasses'
            ])
            ->get();


        /*
        |--------------------------------------------------------------------------
        | ENROLLED COURSE COUNT
        |--------------------------------------------------------------------------
        */

        $enrolledCoursesCount = $enrolledCourses->count();


        /*
        |--------------------------------------------------------------------------
        | ASSIGNMENT IDS
        |--------------------------------------------------------------------------
        */

        $assignmentIds = $enrolledCourses
            ->flatMap(function ($course) {

                return $course->assignments->pluck('id');

            })
            ->unique()
            ->values();


        /*
        |--------------------------------------------------------------------------
        | PENDING ASSIGNMENTS
        |--------------------------------------------------------------------------
        */

        $pendingAssignments = Assignment::whereIn(
                'id',
                $assignmentIds
            )
            ->where('deadline', '>=', now())
            ->whereDoesntHave('submissions', function ($query) use ($user) {

                $query->where('user_id', $user->id);

            })
            ->with('course')
            ->orderBy('deadline')
            ->get();


        /*
        |--------------------------------------------------------------------------
        | STUDENT SUBMISSIONS
        |--------------------------------------------------------------------------
        */

        $submissions = Submission::where(
                'user_id',
                $user->id
            )
            ->with([
                'assignment',
                'assignment.course'
            ])
            ->latest()
            ->get();


        /*
        |--------------------------------------------------------------------------
        | SUBMITTED ASSIGNMENT COUNT
        |--------------------------------------------------------------------------
        */

        $submittedCount = $submissions->count();


        /*
        |--------------------------------------------------------------------------
        | GRADED SUBMISSIONS
        |--------------------------------------------------------------------------
        */

        $gradedSubmissions = $submissions
            ->whereNotNull('marks');


        /*
        |--------------------------------------------------------------------------
        | AVERAGE MARKS
        |--------------------------------------------------------------------------
        */

        $averageMarks = $gradedSubmissions->count()
            ? round($gradedSubmissions->avg('marks'), 1)
            : 0;


        /*
        |--------------------------------------------------------------------------
        | COURSE PROGRESS
        |--------------------------------------------------------------------------
        */

        $courseProgress = $enrolledCourses->map(

            function ($course) use ($user) {

                $totalAssignments =
                    $course->assignments->count();


                $submittedAssignments = 0;


                if ($totalAssignments > 0) {

                    $submittedAssignments = Submission::where(
                            'user_id',
                            $user->id
                        )
                        ->whereIn(
                            'assignment_id',
                            $course->assignments->pluck('id')
                        )
                        ->count();

                }


                if ($totalAssignments > 0) {

                    $progress = round(
                        ($submittedAssignments / $totalAssignments) * 100
                    );

                } else {

                    $progress = 0;

                }


                $course->progress =
                    min($progress, 100);


                return $course;

            }

        );


        /*
        |--------------------------------------------------------------------------
        | UPCOMING LIVE CLASSES
        |--------------------------------------------------------------------------
        */

        $upcomingLiveClasses = LiveClass::whereIn(
                'course_id',
                $enrolledCourses->pluck('id')
            )
            ->where('date', '>=', now())
            ->with('course')
            ->orderBy('date')
            ->take(5)
            ->get();


        /*
        |--------------------------------------------------------------------------
        | UPCOMING ASSIGNMENT DEADLINES
        |--------------------------------------------------------------------------
        */

        $upcomingDeadlines = Assignment::whereIn(
                'id',
                $assignmentIds
            )
            ->where('deadline', '>=', now())
            ->with('course')
            ->orderBy('deadline')
            ->take(5)
            ->get();


        /*
        |--------------------------------------------------------------------------
        | RECENT ACTIVITIES
        |--------------------------------------------------------------------------
        */

        $recentActivities = $submissions
            ->take(5);


        /*
        |--------------------------------------------------------------------------
        | GRADE CHART
        |--------------------------------------------------------------------------
        */

        $gradeLabels = $gradedSubmissions
            ->take(6)
            ->map(function ($submission) {

                return $submission->assignment->title
                    ?? 'Assignment';

            })
            ->values();


        $gradeValues = $gradedSubmissions
            ->take(6)
            ->map(function ($submission) {

                return $submission->marks;

            })
            ->values();


        /*
        |--------------------------------------------------------------------------
        | AVAILABLE COURSES
        |--------------------------------------------------------------------------
        */

        $availableCourses = Course::where(
                'status',
                'approved'
            )
            ->whereNotIn(
                'id',
                $enrolledCourses->pluck('id')
            )
            ->with('teacher')
            ->latest()
            ->get();


        /*
        |--------------------------------------------------------------------------
        | RETURN DASHBOARD
        |--------------------------------------------------------------------------
        */

        return view(
            'student.dashboard',
            compact(
                'user',
                'enrolledCourses',
                'enrolledCoursesCount',
                'pendingAssignments',
                'submittedCount',
                'averageMarks',
                'courseProgress',
                'upcomingLiveClasses',
                'upcomingDeadlines',
                'recentActivities',
                'gradeLabels',
                'gradeValues',
                'availableCourses'
            )
        );
    }


    /*
    |--------------------------------------------------------------------------
    | COURSE DETAILS
    |--------------------------------------------------------------------------
    */

    public function courseDetails($id)
    {
        $course = Course::with([
            'teacher',
            'assignments',
            'liveClasses',
            'recordedClasses'
        ])->findOrFail($id);


        return view(
            'student.course-details',
            compact('course')
        );
    }


    /*
    |--------------------------------------------------------------------------
    | ENROLL COURSE
    |--------------------------------------------------------------------------
    */

    public function enroll(Request $request)
    {
        $request->validate([
            'course_id' => 'required|exists:courses,id'
        ]);


        $user = auth()->user();


        /*
        |--------------------------------------------------------------------------
        | CHECK ALREADY ENROLLED
        |--------------------------------------------------------------------------
        */

        if (
            !$user->enrolledCourses
                ->contains($request->course_id)
        ) {

            $user->enrolledCourses()
                ->attach($request->course_id);

        }


        return back()->with(
            'success',
            'Successfully enrolled in the course!'
        );
    }
}