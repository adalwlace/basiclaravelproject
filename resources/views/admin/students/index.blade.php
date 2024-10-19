@extends('admin.layout.master')
@section('content')
    <h1>Student list</h1>

    <a class="btn btn-primary" href="{{ route('admin.students.create') }}" style=" color:white">Create</a>

    <div class="table-responsive">
        <table class="table" style="width: 90%">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>email</th>
                    <th>class</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->class }}</td>
                        <td>
                            <form action="{{ route('admin.students.destroy', $student ) }}" method="POST" >

                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                            <a href="{{route('admin.students.edit',$student)}}">Edit</a>
                        </td>


                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
