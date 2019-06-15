@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <a href="{{ route('department.create') }}" class="btn btn-info btn-sm float-right mt-2">Add Department Details</a>
</div>
<div class="card card-body topcard mt-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-8 topdiv">
                <h2 class="toptext">Student Details</h2>
            </div>

            <div class="col-4 text-right right-details">
                <div class="rdchild">
                    <b>Total</b> &nbsp; <span class="badge badge-secondary mid"> 1347 </span>
                </div>

                <div class="rdchild">
                    <b>Present</b> &nbsp; <span class="badge badge-success mid"> 336 </span>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="container-fluid mt-5">
    <div class="my-3 pt-3 pl-3 pr-3 bg-white rounded box-shadow">
        <span class="text-muted small mt-1" style="float:right">Last Updated : <b>7 min ago</b></span>
        <h5 class="border-bottom border-gray pb-2 mb-0"><b>Overview</b></h5>
        <div class="clearfix"></div>
        @foreach($departments as $dept)
            <div class="row">
                <div class="col-5">
                    <div class="media text-muted pt-3">
                        <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32"
                            class="mr-2 rounded" style="width: 50px; height: 50px;"
                            src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2232%22%20height%3D%2232%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2032%2032%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16b31f6bb03%20text%20%7B%20fill%3A%23007bff%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A2pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16b31f6bb03%22%3E%3Crect%20width%3D%2232%22%20height%3D%2232%22%20fill%3D%22%23007bff%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2211.546875%22%20y%3D%2216.9%22%3E32x32%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                            data-holder-rendered="true">
                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                            <strong class="text-gray-dark mid mb-1">{{$dept->full_name}}</strong> ({{$dept->short_name}})
                            <span class="d-block"><b>HOD </b> : {{$dept->hod}} &nbsp; | &nbsp; {{$dept->contact}}</span>
                        </p>
                    </div>
                </div>

                <div class="col-2 text-right right-details text-muted border-bottom border-gray">
                    <div class="dept-details pt-2 pb-1 mb-0 lh-125">
                        I Year &nbsp; <b class="text-primary "> 112 </b>
                    </div>

                    <div class="dept-details pt-1 pb-2 mb-0 lh-125">
                        II Year &nbsp; <b class="text-primary "> 223 </b>
                    </div>
                </div>

                <div class="col-2 text-right right-details text-muted border-bottom border-gray">
                    <div class="dept-details pt-2 pb-1 mb-0 lh-125">
                        III Year &nbsp; <b class="text-primary "> 211 </b>
                    </div>

                    <div class="dept-details pt-1 pb-2 mb-0 lh-125">
                        IV Year &nbsp; <b class="text-primary "> 344 </b>
                    </div>
                </div>

                <div class="col-2 text-center flex">
                    <div class="border-bottom border-gray w-100 flex">
                        <p style="margin:auto;">Total : <b> 1334</b> </p>
                    </div>
                    
                </div>

                <div class="col-1 flex">
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
        @endforeach

        <div class="row bg-dark text-white">
            <div class="col-5 flex">
                <h3 class="pt-3 pb-3" style="margin:auto 0 auto 55px;">Total</h3>
            </div>

            <div class="col-2 text-right right-details">
                <div class="dept-details pt-2 pb-1 mb-0 lh-125">
                    I Year &nbsp; <b class="text-warning"> 211 </b>
                </div>

                <div class="dept-details pt-1 pb-2 mb-0 lh-125">
                    II Year &nbsp; <b class="text-warning"> 48 </b>
                </div>
            </div>

            <div class="col-2 text-right right-details">
                <div class="dept-details pt-2 pb-1 mb-0 lh-125">
                    III Year &nbsp; <b class="text-warning "> 48 </b>
                </div>

                <div class="dept-details pt-1 pb-2 mb-0 lh-125">
                    IV Year &nbsp; <b class="text-warning"> 96 </b>
                </div>
            </div>

            <div class="col-2 text-center flex">
                <div class="w-100 flex">
                    <p style="margin:auto; font-size:35px;"><b> 1334</b> </p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
