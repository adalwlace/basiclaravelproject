@extends('admin.layout.master')
@section('content')
    <h1>To Do</h1>

    <a class="btn btn-primary" href="{{ route('admin.todos.create') }}" style=" color:white">Create</a>

    <div class="table-responsive">
        <table class="table" style="width: 90%">
            <thead>
                <tr>
                    <th>id</th>
                    <th>task</th>
                    <th>priority</th>
                    <th>status</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($todo as $todo)
                    <tr>
                        <td>{{ $todo->id }}</td>
                        <td>{{ $todo->task }}</td>
                        <td>{{ $todo->priority }}</td>
                        <td>{{ $todo->status }}</td>
                        <td>
                            <form action="{{ route('admin.todos.destroy', $todo ) }}" method="POST" >

                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                            <a href="{{route('admin.todos.edit',$todo)}}">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
