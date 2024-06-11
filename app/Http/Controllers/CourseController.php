<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function list()
    {
        $courses = Course::select(
            'id',
            'name',
            'lecturer',
            'thumbnail',
            'num_of_chapters',
            'num_of_lessons',
            'time_to_complete',
            'description',
            'starts',
            'cost'
        )
            ->get();
        if (!$courses->isEmpty()) {
            foreach ($courses as $course) {
                $course->thumbnail = asset('storage/images/' . $course->thumbnail);
            }
            return response()->json([
                'success' => true,
                'courses' => $courses
            ]);
        } else {
            return response()->json([
                'success' => false, 'message' => 'Không tìm thấy danh sách khóa học.'
            ]);
        }
    }
    public function show($id)
    {
        $course = Course::select(
            'id',
            'name',
            'lecturer',
            'thumbnail',
            'num_of_chapters',
            'num_of_lessons',
            'time_to_complete',
            'description',
            'starts',
            'cost'
        )
            ->where('id', $id)
            ->first();
        if ($course) {
            $course->thumbnail = asset('storage/images/' . $course->thumbnail);
            return response()->json([
                'success' => true,
                'course' => $course
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Không tìm thấy khóa học.'
            ]);
        }
    }
    public function check($id)
    {
        return Course::where('id', $id)->exists();
    }
}
