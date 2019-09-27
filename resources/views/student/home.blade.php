@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <a href="{{ route('student.create') }}" class="btn btn-info btn-sm float-right mt-2">Add Student Details</a>
</div>

<div class="card card-body topcard mt-5 mb-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-8 topdiv">
                <h2 class="toptext text-primary">Student Details</h2>
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

        <div class="row border-bottom border-gray bw-2 ml-0 mr-0 pt-2 pb-2 flex">
            <div class="col-3 pt-3">
                <span class="mid2 text-muted bold mr-4">S.N</span>
                <span class="mid2 text-muted bold">Year</span>
            </div>

            <div class="col-8 text-center border-left border-right border-gray">
                <span class="mid2 text-muted bold">Faculties</span>
                <div class="row mt-2">
                    @foreach($faculty as $fac)
                        <div class="col">
                            <span class="mid2 text-muted">{{$fac->short_name}}</span>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="col-1 text-center pt-3">
                <span class="mid2 text-muted bold">Total</span>
            </div>
        </div>

        @for($i=0; $i<=4; $i++)

        <div class="row">
            <div class="col-3">
                <div class="media pt-3">
                    <div class="d-inline mr-3 bg-danger deptindex text-white text-center">
                        <span class="large bold"> {{ $i+1 }} </span>
                    </div>
                    <p class="media-body pb-3 mb-0 lh-125 border-bottom border-gray">
                        <strong class="mid2 mb-1 text-danger">First Year</strong>
                        <span class="d-block mid text-dark">Semester : <b>Second</b></span>
                    </p>
                </div>
            </div>

            @foreach($faculty as $fac)
                <div class="col lh-125 text-center flex border-bottom border-gray">
                    <b class="text-primary ma large"> 48 </b>
                </div>
            @endforeach
            

            <div class="col-1 text-center flex">
                <div class="border-bottom border-gray w-100 flex">
                    <p style="margin:auto;"><b> 122</b> </p>
                </div>
            </div>

            <!-- <div class="col-2 flex border-bottom border-gray">
                <div style="flex:1; margin:auto;" class="flex text-center">
                    <div style="flex:1">
                        <a href="#" target="_blank" rel="noopener noreferrer" title="Visit the Department's Page">
                            <i class="fas fa-external-link-alt larger text-danger external"></i>
                        </a>
                    </div>
                    <div style="flex:1">
                        <a href="#" target="_blank" rel="noopener noreferrer" title="Edit this Department">
                            <i class="far fa-edit larger text-primary external"></i>
                        </a>
                    </div>
                </div>
            </div> -->
        </div>
        @endfor

        <div class="row bg-dark text-white">
            <div class="col-5 flex">
                <h3 class="pt-3 pb-3" style="margin:auto 0 auto 55px;">Total</h3>
            </div>

            <div class="col-2 text-right right-details">
                <div class="dept-details pt-2 pb-1 mb-0 lh-125">
                    I Year &nbsp; <b class="text-warning"> #</b>
                </div>

                <div class="dept-details pt-1 pb-2 mb-0 lh-125">
                    II Year &nbsp; <b class="text-warning"> #</b>
                </div>
            </div>

            <div class="col-2 text-right right-details">
                <div class="dept-details pt-2 pb-1 mb-0 lh-125">
                    III Year &nbsp; <b class="text-warning "> #</b>
                </div>

                <div class="dept-details pt-1 pb-2 mb-0 lh-125">
                    IV Year &nbsp; <b class="text-warning"> #</b>
                </div>
            </div>

            <div class="col-1 text-center flex">
                <div class="w-100 flex">
                    <p style="margin:auto; font-size:35px;"><b> #</b> </p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
