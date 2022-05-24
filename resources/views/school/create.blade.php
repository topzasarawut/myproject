@extends('layouts.adminapp')

@section('content')

    <div class="container">
            <h2>Add new School Data</h2>
            <a href="{{ route('school.index') }}" class="btn btn-primary">Back</a>
    </div>
    <form action="{{ route('school.store') }}" method="post">
        @csrf
        <div class="container">
        <div class="col-md-4">
            <div class="form-group">
                <strong>รหัสสถานศึกษา</strong>
                <input type="text" name="sc_id" class="form-control" placeholder="">
                <strong>ชื่อสถานศึกษา</strong>
                <input type="text" name="sc_name" class="form-control" placeholder="">
                <strong>ที่อยู่</strong>
                <input type="text" name="sc_address" class="form-control" placeholder="">
                <strong>ตำบล</strong>
                <input type="text" name="sc_tambon" class="form-control" placeholder="">
                <strong>อำเภอ</strong>
                <input type="text" name="sc_amp" class="form-control" placeholder="">
                <strong>จังหวัด</strong>
                <input type="text" name="sc_prove" class="form-control" placeholder="">
                <strong>รหัสไปรษณีย์</strong>
                <input type="text" name="sc_zipcode" class="form-control" placeholder="">
                <strong>โทรศัพท์</strong>
                <input type="text" name="sc_tel" class="form-control" placeholder="">
            </div>
        </div>
        </div>
        <br>
        <div class="container">
            <button type="submit" class="btn btn-primary">submit</button>
        </div>
    </form>
    

@endsection