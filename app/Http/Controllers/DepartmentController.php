<?php

namespace App\Http\Controllers;

use App\Department;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $first = 0; $second = 0; $third = 0; $fourth = 0;

        $departments = Department::with('students')->get();

        // Count the number of students in each year for all faculties
        foreach($departments as $dept){
            
            $count[$dept->short_name][1] = $dept->students->where('rollyear', 2075)->count();
            // Example: $count[BCT][1] = BCT First Year

            $count[$dept->short_name][2] = $dept->students->where('rollyear', 2074)->count();
            // Example: $count[BCT][2] = BCT Second Year

            $count[$dept->short_name][3] = $dept->students->where('rollyear', 2073)->count();
            // Example: $count[BCT][3] = BCT Third Year

            $count[$dept->short_name][4] = $dept->students->where('rollyear', 2072)->count();
            // Example: $count[BCT][4] = BCT Fourtn Year

            $count[$dept->short_name][0] = $count[$dept->short_name][1] + $count[$dept->short_name][2] + $count[$dept->short_name][3] + $count[$dept->short_name][4];
            // Count of total number of students in this faculty.

            //Count Students in each year
            $first += $count[$dept->short_name][1];
            $second += $count[$dept->short_name][2];
            $third += $count[$dept->short_name][3];
            $fourth += $count[$dept->short_name][4];
        }

        $yearCount = array('first' => $first, 'second' => $second, 'third' => $third, 'fourth' => $fourth);

        return view('department.home', ['departments' => $departments, 'count' => $count, 'year' => $yearCount]);
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
            'short_name' => $request->input('short_name'),
            'hod' => $request->input('hod'),
            'contact' => $request->input('contact')
        ]);

        return redirect()->route('department.index')->with('success', 'New Department Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($shortname)
    {
        $department = Department::where('short_name','=',$shortname)->with('students')->first(); //Needs Refactoring. Get students seperately. Dont pass students to front end

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
    public function edit($shortname)
    {
        $department = Department::where('short_name','=',$shortname)->first();
        return view('department.edit', ['department' => $department]);
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
        $this->validate($request, [ 
            'deptname' => 'required|string|min:5|max:255',
            'short_name' => [
                'required', Rule::unique('departments')->ignore($id),
            ],
            'hod' => 'required',
            'contact' => 'required'
        ]);

        $department = Department::find($id);

        $department->full_name = $request->input('deptname');
        $department->short_name = $request->input('short_name');
        $department->hod = $request->input('hod');
        $department->contact = $request->input('contact');

        $department->save();

        return redirect()->route('department.index')->with('success', 'Department Details Modified Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $department = Department::find($id);
        $department->delete();
        return redirect()->route('department.index')->with('info', 'Department Deleted Successfully');
    }
}
