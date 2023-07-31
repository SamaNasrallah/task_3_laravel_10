<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::all();
        return view('admin.dashboard', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'course_title' => 'required',
            'category_id' => 'required', // تأكد من تحديد اسم الحقل الصحيح هنا (يجب أن يكون "category_id")
            'details' =>'required',
            'hours' =>'required',
            'start_date' =>'required',
            'teacher' =>'required',
        ]);
       
        Course::create([
            "course_title" => request("course_title"),
            "category_id" => request('category_id'),
            "details" => request("details"),
            "hours" => request("hours"),
            "start_date" => request("start_date"),
            "teacher" => request("teacher"),
        ]);
        
        return redirect()->route('course.index')
        ->with('success','Courses added successfully');



        
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        return view('admin.details', compact('course'));


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        return view('admin.edit',compact('course'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        $request->validate([
            'course_title' => 'required',
        ]);
        $input = $request->all();
        $course->update($input);
      
        return redirect()->route('course.index')
        ->with('success','Courses Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        if (Course::exists($course)) {
        $course->delete();
        return redirect()->route('course.index')
        ->with('success','Courses Deleted successfully');
        } else {
            return response('File Not Found', 404);
        }
        
    }
}
