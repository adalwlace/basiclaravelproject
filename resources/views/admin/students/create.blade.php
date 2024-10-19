@extends('admin.layout.master')
@section('content')
    <h1>Create</h1>
    <form action="{{ route('admin.students.index') }}" method="POST">
        <div style="display: flex; flex-direction:column; padding:20px">

            @csrf
            <label for="name">Name</label>
            <input type="text" name="name" id="" style="padding:20px">

            <label for="email">Email</label>
            <input type="email" name="email" id=""  style="padding:20px">

            <label for="class">Class</label>
            <input type="text" name="class" id="" style="padding:20px">

            <button
                style="width: 10%; margin-top:5px; padding: 10px 20px; background-color: #007bff; color: white; border:none; border-radius: 5px;">Create</button>
        </div>
    </form>
@endsection
