@extends('admin.layout.master')
@section('content')
    <h1>Create</h1>
    <form action="{{ route('admin.todos.add') }}" method="POST">
        <div style="display: flex; flex-direction:column; padding:20px">

            @csrf
            <label for="task">Task</label>
            <input type="text" name="task" id="" style="padding:20px">

            <label for="priority">Priority</label>
            <input type="text" name="priority" id="" style="padding: 20px">

            <label for="status">Status</label>
            <input type="text" name="status" id="" style="padding:20px">

            <button
                style="width: 10%; margin-top:5px; padding: 10px 20px; background-color: #007bff; color: white; border:none; border-radius: 5px;">Create</button>
        </div>
    </form>
@endsection
