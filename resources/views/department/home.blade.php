@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <a href="{{ route('department.create') }}" class="btn btn-info btn-sm float-right mt-2">Add Department Details</a>
</div>

<div class="card card-body topcard mt-5 mb-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-8 topdiv">
                <h2 class="toptext text-primary">Departments Details</h2>
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
<div class="container-fluid ml-3">@include('partials.message')</div>
<div class="container-fluid">
    <div class="my-3 pt-3 pl-3 pr-3 bg-white rounded box-shadow">
        <span class="text-muted small mt-1" style="float:right">Last Updated : <b>7 min ago</b></span>
        <h5 class="border-bottom border-gray pb-2 mb-0 bw-2"><b>Overview</b></h5>
        <div class="clearfix"></div>

        @foreach($departments as $i => $dept)
            <div class="row">
                <div class="col-5">
                    <div class="media pt-3">
                        <div class="d-inline mr-3 bg-danger deptindex text-white text-center">
                            <span class="large bold"> {{ $i+1 }} </span>
                        </div>
                        <p class="media-body pb-3 mb-0 lh-125 border-bottom border-gray">
                            <strong class="mid2 mb-1 text-danger">{{$dept->full_name}}</strong>
                            <span class="d-block mid text-dark">Head of Department : <b>{{$dept->hod}} </b> &nbsp; | &nbsp; <i class="fas fa-phone-alt small"></i> &nbsp; <b>{{$dept->contact}}</b></span>
                        </p>
                    </div>
                </div>

                <div class="col-2 text-right right-details text-muted border-bottom border-gray">
                    <div class="dept-details pt-2 pb-1 mb-0 lh-125">
                        I Year &nbsp; <b class="text-primary "> {{ $count[$dept->short_name][1] }} </b>
                    </div>

                    <div class="dept-details pt-1 pb-2 mb-0 lh-125">
                        II Year &nbsp; <b class="text-primary "> {{ $count[$dept->short_name][2] }} </b>
                    </div>
                </div>

                <div class="col-2 text-right right-details text-muted border-bottom border-gray">
                    <div class="dept-details pt-2 pb-1 mb-0 lh-125">
                        III Year &nbsp; <b class="text-primary "> {{ $count[$dept->short_name][3] }} </b>
                    </div>

                    <div class="dept-details pt-1 pb-2 mb-0 lh-125">
                        IV Year &nbsp; <b class="text-primary "> {{ $count[$dept->short_name][4] }} </b>
                    </div>
                </div>

                <div class="col-1 text-center flex">
                    <div class="border-bottom border-gray w-100 flex">
                        <p style="margin:auto;">Total <br> <b> {{ $count[$dept->short_name][0] }}</b> </p>
                    </div>
                    
                </div>

                <div class="col-2 flex border-bottom border-gray">
                    <div style="flex:1; margin:auto;" class="flex text-center">
                        <div style="flex:1">
                            <a href="{{ route('department.show', ['shortname' => $dept->short_name] )}}" target="_blank" rel="noopener noreferrer" title="Visit the Department's Page">
                                <i class="fas fa-external-link-alt larger text-danger external"></i>
                            </a>
                        </div>
                        <div style="flex:1">
                            <a href="{{ route('department.edit', ['shortname' => $dept->short_name] )}}" target="_blank" rel="noopener noreferrer" title="Edit this Department">
                                <i class="far fa-edit larger text-primary external"></i>
                            </a>
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
                    I Year &nbsp; <b class="text-warning"> {{ $year['first'] }}</b>
                </div>

                <div class="dept-details pt-1 pb-2 mb-0 lh-125">
                    II Year &nbsp; <b class="text-warning"> {{ $year['second'] }}</b>
                </div>
            </div>

            <div class="col-2 text-right right-details">
                <div class="dept-details pt-2 pb-1 mb-0 lh-125">
                    III Year &nbsp; <b class="text-warning "> {{ $year['third'] }}</b>
                </div>

                <div class="dept-details pt-1 pb-2 mb-0 lh-125">
                    IV Year &nbsp; <b class="text-warning"> {{ $year['fourth'] }}</b>
                </div>
            </div>

            <div class="col-1 text-center flex">
                <div class="w-100 flex">
                    <p style="margin:auto; font-size:35px;"><b> {{ $year['first'] + $year['second'] + $year['third'] + $year['fourth'] }}</b> </p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
