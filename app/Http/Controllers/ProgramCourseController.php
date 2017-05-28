<?php

namespace App\Http\Controllers;


use App\Models\Faculty;
use App\Models\Program;
use App\Models\Course;
use App\Models\ProgramCourse;
use Illuminate\Http\Request;
use Validator;

class ProgramCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($program_id)
    {
        $program = Program::findOrFail($program_id);
        $programCourses = $program->programCourses;
        return view('program.course.index')
         ->with('program', $program)
         ->with('programCourses', $programCourses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($program_id)
    {
        $program = Program::findOrFail($program_id);
        $courseIDs = $program->programCourses->pluck('course_id');
        $courses = Course::whereNotIn('id', $courseIDs)->get();
        return view('program.course.create')
        ->with('program', $program)
        ->with('courses', $courses);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($program_id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'course_id' => 'required|exists:courses,id',
            'type' => 'required',
        ]);

        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }
        
        $program = Program::findOrFail($program_id);
        $ins = $request->all();
        $ins['program_id'] = $program->id;
        $programCourse = ProgramCourse::create($ins);
        return redirect()->route('programs.courses.index', $program->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($program_id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      
    }
}
