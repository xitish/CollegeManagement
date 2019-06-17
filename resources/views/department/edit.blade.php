@extends('layouts.master')

@section('content')
<div class="container mt-5">
    <h4 class="text-center bold">Edit Department </h4><hr>
    <h5 class="bold d-inline">Now editing : <span class="text-danger">{{ $department->full_name }}</span> </h5>

    <button class="btn btn-danger btn-sm float-right" data-toggle="modal" data-target="#exampleModal"> Delete This Department </button>

    @include('partials.message')
    <div class="my-3 p-5 bg-white rounded box-shadow">
        <form method="POST" action="{{ route('department.update', ['id' => $department->id]) }}">
            @method('PATCH')
            @csrf

            <div class="form-group row">
                <label for="deptname" class="col-md-4 col-form-label text-md-right"><small class="text-muted bold"> Department's Full Name</small></label>

                <div class="col-md-6">
                    <input id="deptname" type="text" class="form-control form-control-sm @error('deptname') is-invalid @enderror" name="deptname"
                        value="{{ old('deptname') !==null ? old('deptname') : $department->full_name }}" required autocomplete="name" placeholder="Eg: Department of Civil Engineering" autofocus>

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
                        name="short_name" value="{{ old('short_name') !==null ? old('short_name') : $department->short_name }}" placeholder="Eg: BCE" required>
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
                        <option value="{{ old('hod') !==null ? old('hod') : $department->hod }}" selected>{{ old('hod') !==null ? old('hod') : $department->hod }}</option>
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
                        name="contact" value="{{ old('contact') !==null ? old('contact') : $department->contact }}" placeholder="Phone Number" required>

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
                        {{ __('Update Department') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Modal for Delete -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h4 class="modal-title" id="exampleModalLabel">Delete Confirmation</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="color:white;">&times;</span>
                </button>
            </div>
            <form action="{{ route('department.destroy', ['id' => $department->id ]) }}" method="POST">
                @csrf
                @method('DELETE')
                <div class="modal-body">
                    <h5 class="text-danger"> Are you sure you want to delete this Department?</h5>
                    <strong class="border-danger text-danger"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> This action cannot be Undone</strong>
                    <hr>
                    <h5 id="deptname" class="bold"> {{$department->full_name}} | {{ $department->short_name }}</h5>
                    Head of Department : <b class="mid">{{ $department->hod }}</b> &nbsp; | &nbsp;
                    <i class="fas fa-phone-alt small"></i> <b class="mid">{{ $department->contact }}</b>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
