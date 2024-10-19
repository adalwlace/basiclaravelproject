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

        <form action="{{ route('admin.todos.update', $todo->id) }}" method="POST">
            @csrf
            @method('PUT');

            <div style="display: flex; flex-direction:column; padding:20px">

                @csrf
                <label for="task">Task</label>
                <input type="text" name="task" id="" value="{{ $todo->name }}" style="padding:20px" required>

                <label for="priority">Priority</label>
                <input type="date" name="priority" id="" value="{{ $todo->priority }}" style="padding: 20px">

                <label for="status">Status</label>
                <input type="text" name="status" id="" value="{{ $todo->status }}" style="padding:20px"
                    required>

                <button type="submit"
                    style="width: 10%; margin-top:5px; padding: 10px 20px; background-color: #007bff; color: white; border:none; border-radius: 5px;">Update</button>
            </div>
        </form>
    </div>
@endsection
