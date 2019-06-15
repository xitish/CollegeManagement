@extends('layouts.master')

@section('content')
<div class="depttop">
    <div class="container-fluid" style="height:inherit;">
        <div class="text-white flex h-100 p-5">
            <div class="f1 dept-name">
                <h2>{{$department->full_name}}</h2>
                <strong style="text-transform:uppercase;">{{$department->hod}}</strong> &nbsp; &nbsp; {{$department->contact}}
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-6">
            <div class="my-3 p-3 bg-white rounded box-shadow">
                <h5 class="border-bottom bw-2 border-gray pb-2 mb-0"><b>Department Teachers</b></h5>

                <div class="m-3 flex" style="align-items:flex-end;">
                    <img src="{{asset('images/sf.jpg')}}" class="mr-4 circle" alt="Teacher" height=80>
                    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray f1">
                        <strong class="d-block text-gray-dark mid mb-1">Prawin Sangroula</strong>
                        9862687014
                    </p>
                </div>

                <div class="m-3 flex" style="align-items:flex-end;">
                    <img src="{{asset('images/sf.jpg')}}" class="mr-4 circle" alt="Teacher" height=80>
                    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray f1">
                        <strong class="d-block mid mb-1">Prawin Sangroula</strong>
                        9862687014
                    </p>
                </div>

                <div class="m-3 flex" style="align-items:flex-end;">
                    <img src="{{asset('images/sf.jpg')}}" class="mr-4 circle" alt="Teacher" height=80>
                    <p class="media-body pb-3 mb-0 small lh-125 f1">
                        <strong class="d-block text-primary mid mb-1">Prawin Sangroula</strong>
                        9862687014
                    </p>
                </div>
                <div class="border-bottom bw-2 border-grey w-100"></div>

            </div>
        </div>

        <div class="col-6">
            <div class="my-3 p-3 bg-white rounded box-shadow">
                <h5 class="border-bottom bw-2 border-gray pb-2 mb-0"><b>Students Details</b></h5>

                <div class="mt-3 item-box flex" style="align-items:center;">
                    <div class="f2">
                        <span class="large">First Year</span>
                        <small class="d-block">Current Semester : II</small>
                    </div>

                    <div class="f1" style="height:auto;">
                        <span class="lh-125 bold">{{$count['first']}}</span> Students
                    </div>
                    <div class="f1 flex">
                        <div style="flex:1; margin:auto;" class="flex text-center">
                            <div style="flex:1">
                                <img src="{{asset('images/viewdept.png')}}" height=30 alt="View Dept">
                            </div>
                            <div style="flex:1">
                                <img src="{{asset('images/viewdept.png')}}" height=30 alt="Edit Dept">
                            </div>
                        </div>
                    </div>
                    
                </div>

                <div class="mt-3 item-box flex" style="align-items:center;">
                    <div class="f2">
                        <span class="large">Second Year</span>
                        <small class="d-block">Current Semester : II</small>
                    </div>

                    <div class="f1" style="height:auto;">
                        <span class="lh-125 bold">{{$count['second']}} </span> Students
                    </div>
                    <div class="f1 flex">
                        <div style="flex:1; margin:auto;" class="flex text-center">
                            <div style="flex:1">
                                <img src="{{asset('images/viewdept.png')}}" height=30 alt="View Dept">
                            </div>
                            <div style="flex:1">
                                <img src="{{asset('images/viewdept.png')}}" height=30 alt="Edit Dept">
                            </div>
                        </div>
                    </div>
                    
                </div>

                <div class="mt-3 item-box flex" style="align-items:center;">
                    <div class="f2">
                        <span class="large">Third Year</span>
                        <small class="d-block">Current Semester : II</small>
                    </div>

                    <div class="f1" style="height:auto;">
                        <span class="lh-125 bold">{{$count['third']}} </span> Students
                    </div>
                    <div class="f1 flex">
                        <div style="flex:1; margin:auto;" class="flex text-center">
                            <div style="flex:1">
                                <img src="{{asset('images/viewdept.png')}}" height=30 alt="View Dept">
                            </div>
                            <div style="flex:1">
                                <img src="{{asset('images/viewdept.png')}}" height=30 alt="Edit Dept">
                            </div>
                        </div>
                    </div>
                    
                </div>

                <div class="mt-3 item-box flex" style="align-items:center;">
                    <div class="f2">
                        <span class="large">Fourth Year</span>
                        <small class="d-block">Current Semester : II</small>
                    </div>

                    <div class="f1" style="height:auto;">
                        <span class="lh-125 bold">{{$count['fourth']}} </span> Students
                    </div>
                    <div class="f1 flex">
                        <div style="flex:1; margin:auto;" class="flex text-center">
                            <div style="flex:1">
                                <img src="{{asset('images/viewdept.png')}}" height=30 alt="View Dept">
                            </div>
                            <div style="flex:1">
                                <img src="{{asset('images/viewdept.png')}}" height=30 alt="Edit Dept">
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
