@extends('layouts.master')

@section('content')
<div class="container mt-5">
    <a href="#" class="btn btn-success btn-sm float-right">Import from Exel</a>
    <h5 class="text-center bold">Add New Student</h5>
    @include('partials.message')
    <div class="my-3 p-3 bg-white rounded box-shadow">
        <form  method="POST" action="{{ route('student.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="name"><small class="text-muted bold"> Student's Name </small> </label>
                    <input type="text" name="name" class="form-control form-control-sm {{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name') }}" id="name" placeholder="Student Name" required autofocus>
                
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                </div>

                <div class="form-group col-md-2 pl-3">
                    <label for="dob"><small class="text-muted bold"> Date of Birth </small> </label>
                    <input type="date" name="dob" class="form-control form-control-sm {{ $errors->has('dob') ? ' is-invalid' : '' }}" value="{{ old('dob') }}" id="dob" required>
                
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('dob') }}</strong>
                    </span>
                </div>

                <div class="form-group col-md-2 pl-3">
                    <label for="address"><small class="text-muted bold">Address</small></label>
                    <input type="text" name="address" class="form-control form-control-sm{{ $errors->has('address') ? ' is-invalid' : '' }}" value="{{ old('address') }}" id="address" placeholder="Ilam, Nepal" required>
                    
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('address') }}</strong>
                    </span>
                </div>

                <div class="form-group col-md-2 pl-3">
                    <label for="phone"><small class="text-muted bold">Phone Number</small></label>
                    <input type="text" name="phone" class="form-control form-control-sm{{ $errors->has('phone') ? ' is-invalid' : '' }}" value="{{ old('phone') }}" id="phone" placeholder="Mobile Number" required>
                    
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('phone') }}</strong>
                    </span>
                </div>

                <div class="form-group col-md-3 pl-3">
                    <label for="email"><small class="text-muted bold">Email</small></label>
                    <input type="email" name="email" class="form-control form-control-sm{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" id="email" placeholder="Email" required>
                    
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                </div>
            </div>

            <div class="form-row mt-3 mb-3">
                <div class="form-group col-md-2">
                    <label for="rollyear"><small class="text-muted bold"> Campus Roll Number</small> </label>
                    <select id="rollyear" name="rollyear" class="form-control form-control-sm{{ $errors->has('rollyear') ? ' is-invalid' : '' }}">
                    <option value="{{ old('rollyear') !==null ? old('rollyear') : '' }}" selected>{{ old('rollyear') !==null ? old('rollyear') : 'Year' }}</option>
                        <option  value="2072">2072</option>
                        <option  value="2073">2073</option>
                        <option  value="2074">2074</option>
                    </select>

                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('rollyear') }}</strong>
                    </span>
                </div>

                <div class="form-group col-md-1">
                    <label for="rollfaculty"><small class="text-muted bold"> </small></label>
                    <select id="rollfaculty" name="rollfaculty" class="form-control form-control-sm{{ $errors->has('rollfaculty') ? ' is-invalid' : '' }}">
                    <option value="{{ old('rollfaculty') !==null ? old('rollfaculty') : '' }}" selected>{{ old('rollfaculty') !==null ? old('rollfaculty') : 'Faculty' }}</option>
                        <option value="BCT">BCT</option>
                        <option value="BEX">BEX</option>
                        <option  value="BME">BME</option>
                    </select>

                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('rollfaculty') }}</strong>
                    </span>
                </div>

                <div class="form-group col-md-1">
                    <label for="rollnumber"><small class="text-muted bold"> </small></label>
                    <select id="rollnumber" name="rollnumber" class="form-control form-control-sm {{ $errors->has('rollnumber') ? ' is-invalid' : '' }}">
                    <option value="{{ old('rollnumber') !==null ? old('rollnumber') : '' }}" selected>{{ old('rollnumber') !==null ? old('rollnumber') : 'Roll No' }}</option>
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                    </select>

                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('rollnumber') }}</strong>
                    </span>
                </div>

                <div class="form-group col-md-3 pl-4">
                    <label for="citizen"><small class="text-muted bold">Citizenship Number</small></label>
                    <input type="text" name="citizen" class="form-control form-control-sm{{ $errors->has('citizen') ? ' is-invalid' : '' }}" value="{{ old('citizen') }}" id="citizen" placeholder="20145/22442" required>
                    
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('citizen') }}</strong>
                    </span>
                </div>

                <div class="form-group col-md-5 pl-5">
                    <label for="photo"><small class="text-muted bold">Student's Photo</small></label>
                    <input type="file" name="photo" class="form-control-file form-control-sm{{ $errors->has('photo') ? ' is-invalid' : '' }}" value="{{ old('photo') }}" id="photo">
                    
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('photo') }}</strong>
                    </span>
                </div>

            </div>
            <button type="submit" class="btn btn-primary btn-sm">Enter</button>
        </form>
    </div>
</div>
@endsection
