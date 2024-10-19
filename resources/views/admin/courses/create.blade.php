@extends('admin.layout.master')
@section('content')
    <h1>Create</h1>
    <form action="{{ route('admin.courses.index') }}" method="POST">
        <div style="display: flex; flex-direction:column; padding:20px">

            @csrf
            <label for="course_name">Course Name</label>
            <input type="text" name="course_name" id="" style="padding:20px">

            <label for="instructor">Instructor</label>
            <input type="text" name="instructor" id="" style="padding:20px">


            <label for="duration">Duration</label>
            <input type="text" name="duration" id="" style="padding:20px">

            <button
                style="width: 10%; margin-top:5px; padding: 10px 20px; background-color: #007bff; color: white; border:none; border-radius: 5px;">Create</button>
        </div>
    </form>
@endsection
