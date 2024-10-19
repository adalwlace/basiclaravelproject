@extends('admin.layout.master')
@section('content')
    <div class="container">
        <h1>Edit</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>

            </div>
        @endif

        <form action="{{ route('admin.tasks.update', $task->id) }}" method="POST">
            @csrf
            @method('PUT');
            {{-- put: update an existing resource --}}
            <div style="display: flex; flex-direction:column; padding:20px">

                @csrf
                <label for="task_name">Task_name</label>
                <input type="text" name="task_name" id="" value="{{ $task->task_name }}" style="padding:20px" required>

                <label for="description">Description</label>
                <textarea name="description" id="" cols="30" rows="10" value="{{ $task->description }}" style="padding:20px"
                    required></textarea>

                <label for="due_date">Due_date</label>
                <input type="text" name="due_date" id="" value="{{ $task->due_date }}" style="padding:20px"
                    required>

                <button type="submit"
                    style="width: 10%; margin-top:5px; padding: 10px 20px; background-color: #007bff; color: white; border:none; border-radius: 5px;">Update</button>
            </div>
        </form>
    </div>
@endsectask
