<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //retriving all courses
        $courses = Course::all();
        return response()->json($courses);
    }

        /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //storing a new course
        $course = new Course();
        $course->name = $request->input("name");
        $course->teacher_name = $request->input("teacher_name");
        $course->total_hours = $request->input("total_hours");
        $course->save();
        
        return response()->json($course, 201);

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //retriving a course with an id
        $course = Course::find($id);
        return response()->json($course);
    }

       /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        //updating a course with an id(PUT/PATCH)
        $course->name = $request->input('name');
        $course->teacher_name = $request->input('teacher_name');
        $course->total_hours = $request->input('total_hours');
        $course->save();
        return response()->json($course, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //deleting a course with an id
        $course = Course::find($id);
        $course->delete();
        return response()->json('Course deleted succesfully');
    }
}
