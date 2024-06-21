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
            'fake_cost',
            'cost',
            'duration'
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
            'fake_cost',
            'cost',
            'duration'
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
    public function getRandomCoursesNotInCart($ids)
    {
        $idsArray = explode(',', $ids);
        $randomCourses = Course::whereNotIn('id', $idsArray)
            ->select(
                'id',
                'name',
                'lecturer',
                'thumbnail',
                'fake_cost',
                'cost',
                'duration'
            )
            ->inRandomOrder()
            ->limit(10)
            ->get();
        foreach ($randomCourses as $course) {
            $course->thumbnail = asset('storage/images/' . $course->thumbnail);
        }
        return $randomCourses;
    }
}
