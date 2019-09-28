@extends('layouts.master')

@section('content')
<div class="depttop">
    <div class="container-fluid" style="height:inherit;">
        <div class="text-white flex h-100 p-5">
            <div class="f1 dept-name">
                <h2>{{$department->full_name}}</h2>
                <h5 style="text-transform:uppercase;">First Year</h5>{{$department->contact}}
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="my-3 pt-3 pl-3 pr-3 bg-white rounded box-shadow">
    <span class="text-muted small mt-1" style="float:right">Last Updated : <b>7 min ago</b></span>
        <h5 class="border-bottom border-gray pb-2 mb-0 bw-2"><b>Students List</b></h5>
        <div class="clearfix"></div>

        <table class="table text-center">
            <thead>
                <th>S.N</th>
                <th>Photo</th>
                <th>Student Name</th>
                <th>Campus Roll No.</th>
                <th>Phone Number</th>
                <th>Action</th>
            </thead>

            <tbody>
                @php $i = 0; @endphp
                @foreach($students as $student)
                <tr>
                    <td>{{++$i}}</td>
                    <td><img src="{{asset($student->photo)}}" alt="Student Photo" height=30 class="circle"></td>
                    <td>{{$student->name}}</td>
                    <td>{{$student->rollyear}}-{{$student->rollfaculty}}-{{$student->rollno}}</td>
                    <td>{{$student->phone}}</td>
                    <td><button class="btn btn-danger btn-sm">Delete</button></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection