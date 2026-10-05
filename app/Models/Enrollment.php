<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'course_id',
        'status',
        'progress',
    ];

    protected $casts = [
        'progress' => 'integer',
    ];


    /*
    |--------------------------------------------------------------------------
    | Student Relationship
    |--------------------------------------------------------------------------
    */

    public function student()
    {
        return $this->belongsTo(User::class, 'student_id');
    }


    /*
    |--------------------------------------------------------------------------
    | Course Relationship
    |--------------------------------------------------------------------------
    */

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
}