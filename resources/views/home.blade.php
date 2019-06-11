@extends('layouts.master')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-3 col-md-6 mt-3">
            <div class="card card1 text-right text-white">
                <div class="card-body">
                    <span class="huge">1354</span>
                </div>
                <div class="card-footer">
                    <a href="{{ route('student.index') }}"><h5>Students</h5></a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-3">
            <div class="card card2 text-right text-white">
                <div class="card-body">
                    <span class="huge">7</span>
                </div>
                <div class="card-footer">
                    <h5>Faculties</h5>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-3">
            <div class="card card3 text-right text-white">
                <div class="card-body">
                    <span class="huge">35</span>
                </div>
                <div class="card-footer">
                    <h5>Classes</h5>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-3">
            <div class="card card4 text-right text-white">
                <div class="card-body">
                    <span class="huge">57</span>
                </div>
                <div class="card-footer">
                    <h5>Teachers</h5>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
