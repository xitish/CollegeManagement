<?php

namespace App\Http\Controllers;

use App\Student;
use App\Department;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        $faculty = Department::select('short_name')->get();

        return view('student.home', ['students' => $students, 'faculty' => $faculty]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departmentList = Department::select('short_name')->get();
        return view('student.create', ['deptList' => $departmentList]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rollyear = "";
        $rollfaculty = "";
        $rollno = "";
        if($request->input('rollyear') != null && $request->input('rollfaculty') != null && $request->input('rollnumber') != null )
        {
            $rollyear = $request->input('rollyear');
            $rollfaculty = $request->input('rollfaculty');
            $rollno = $request->input('rollnumber');
        }

        $message = [
            'name.required' => 'Enter Student\'s Name',
            'dob.required' => 'Select Date of Birth',
            'address.required' => 'Enter Address',
            'phone.required' => 'Enter Phone Number',
            'email.required' => 'Enter Email',
            'citizen.required' => 'Enter Citizenship Number',
            'rollyear.unique' => 'Given Campus Roll Number has already been added.',
            'rollyear.required' => 'Please select year',
            'rollfaculty.required' => 'Please select faculty',
            'rollnumber.required' => 'Please select Roll No',
        ];

        $this->validate($request, [ 
            'name' => 'required|string|min:5|max:255',
            'dob' => 'required|date',
            'address' => 'required|min:5',
            'phone' => 'required|min:5',
            'email' => 'required|email|max:255|unique:students',
            'rollyear' => [
                'bail','required',
                Rule::unique('students')->where(function ($query) use($rollyear,$rollfaculty,$rollno) {
                    return $query->where('rollyear', $rollyear)->where('rollfaculty', $rollfaculty)->where('rollno', $rollno);
                }),
            ],
            'rollfaculty' => 'required',
            'rollnumber' => 'required',
            'citizen' => 'required',
            'photo' => 'sometimes|max:1024'
        ],$message);
        
        if ($request->hasFile('photo')) {
            $photo = 'storage/'.$request->file('photo')->store('images/student');
        }

        Student::create([
            'name' => $request->input('name'),
            'date_of_birth' => $request->input('dob'),
            'address' => $request->input('address'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'rollyear' =>$request->input('rollyear'),
            'rollfaculty' => $request->input('rollfaculty'),
            'rollno' => $request->input('rollnumber'),
            'citizen' => $request->input('citizen'),
            'photo' => isset($photo) ? $photo : 'images/dummy.jpg',
        ]);

        return redirect()->route('student.create')->with('success', 'New Student Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
