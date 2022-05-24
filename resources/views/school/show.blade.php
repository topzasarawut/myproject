@extends('layouts.adminapp')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('MENU :') }}</div>
                    @if($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p> {{$message}} </p>
                    </div>
                    @endif
                    <div class="card-header"> <a href="{{ route('school.create') }}"> เพิ่มข้อมูล</a> </div>
                    <div class="card-body">
                        <div class="col-md-12">
                            <h2>รายละเอียดข้อมูลสถานศึกษา</h2>
                            <a href="{{ route('school.index') }}" class="btn btn-primary">Back</a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="card p-3">
                            <div class="card-title">
                                <strong>รหัสสถานศึกษา:</strong>
                                {{ $school->sc_id }}
                            </div>

                            <div class="card-title">
                                <strong>Student_citizen:</strong>
                                {{ $school->sc_name }}
                            </div>

                            <div class="card-title">
                                <strong>Student_Name:</strong>
                                {{ $school->sc_address }}
                            </div>

                            <div class="card-title">
                                <strong>Student_program:</strong>
                                {{ $school->sc_tambon }}
                            </div>

                            <div class="card-title">
                                <strong>Student_address:</strong>
                                {{ $school->sc_amp }}
                            </div>

                            <div class="card-title">
                                <strong>Student_email:</strong>
                                {{ $school->sc_prove }}
                            </div>

                            <div class="card-title">
                                <strong>Student_telephone:</strong>
                                {{ $school->sc_zipcode }}
                            </div>

                            <div class="card-title">
                                <strong>Student_telephone:</strong>
                                {{ $school->sc_tel }}
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection