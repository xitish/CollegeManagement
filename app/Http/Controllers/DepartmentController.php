<?php

namespace App\Http\Controllers;

use App\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = Department::all();
        return view('department.home', ['departments' => $departments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('department.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [ 
            'deptname' => 'required|string|min:5|max:255',
            'short_name' => 'required|string|unique:departments',
            'hod' => 'required',
            'contact' => 'required'
        ]);

        Department::create([
            'full_name' => $request->input('deptname'),
            'short_name' => $request->input('shortname'),
            'hod' => $request->input('hod'),
            'contact' => $request->input('contact')
        ]);

        return redirect()->route('department.index')->with('info', 'New Department Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $department = Department::where('id','=',$id)->with('students')->first(); //Needs Refactoring. Get students seperately. Dont pass students to front end

        // Count number of students of current faculty in each year
        $first = $department->students->where('rollyear', 2075)->count();
        $second = $department->students->where('rollyear', 2074)->count();
        $third = $department->students->where('rollyear', 2073)->count();
        $fourth = $department->students->where('rollyear', 2072)->count();

        $count = array('first' => $first, 'second' => $second, 'third' => $third, 'fourth' => $fourth);

        return view('department.show', ['department' => $department, 'count' => $count]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
