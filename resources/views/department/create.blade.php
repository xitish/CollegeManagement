@extends('layouts.master')

@section('content')
<div class="container mt-5">
    <h5 class="text-center bold">Add a Department</h5>
    @include('partials.message')
    <div class="my-3 p-5 bg-white rounded box-shadow">
        <form method="POST" action="{{ route('department.store') }}">
            @csrf

            <div class="form-group row">
                <label for="deptname" class="col-md-4 col-form-label text-md-right"><small class="text-muted bold"> Department's Full Name</small></label>

                <div class="col-md-6">
                    <input id="deptname" type="text" class="form-control form-control-sm @error('deptname') is-invalid @enderror" name="deptname"
                        value="{{ old('deptname') }}" required autocomplete="name" placeholder="Eg: Department of Civil Engineering" autofocus>

                    @error('deptname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="shortname" class="col-md-4 col-form-label text-md-right"><small class="text-muted bold"> Department's Short Name</small> </label>

                <div class="col-md-6">
                    <input id="short_name" type="text" class="form-control form-control-sm @error('short_name') is-invalid @enderror"
                        name="short_name" value="{{ old('short_name') }}" placeholder="Eg: BCE" required>
                    <small id="shortNameHelp" class="form-text text-muted">Department's short name should be unique for each department.</small>
                    @error('short_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="hod" class="col-md-4 col-form-label text-md-right"><small class="text-muted bold"> Head of Department</small> </label>

                <div class="col-md-6">
                    <select id="hod" name="hod" class="form-control form-control-sm @error('shortname') is-invalid @enderror">
                        <option value="{{ old('hod') !==null ? old('hod') : 'Not Assigned' }}" selected>{{ old('hod') !==null ? old('hod') : 'Not Assigned' }}</option>
                        <option  value="ABC">ABC Cde</option>
                        <option  value="PQR">PAR Weer</option>
                        <option  value="XYZ">Xyz App</option>
                    </select>

                    @error('hod')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="contact" class="col-md-4 col-form-label text-md-right"><small class="text-muted bold"> Department's Contact Number</small> </label>

                <div class="col-md-6">
                    <input id="contact" type="text" class="form-control form-control-sm @error('contact') is-invalid @enderror"
                        name="contact" value="{{ old('contact') }}" placeholder="Phone Number" required>

                    @error('contact')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary btn-sm">
                        {{ __('Add Department') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
