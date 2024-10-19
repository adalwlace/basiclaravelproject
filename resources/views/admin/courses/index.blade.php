@extends('admin.layout.master')
@section('content')
    <h1>Courses</h1>

    <a class="btn btn-primary" href="{{ route('admin.courses.create') }}" style=" color:white">Create</a>

    <div class="table-responsive">
        <table class="table" style="width: 90%">
            <thead>
                <tr>
                    <th>id</th>
                    <th>course_name</th>
                    <th>instructor</th>
                    <th>duration</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($courses as $course)
                    <tr>
                        <td>{{ $course->id }}</td>
                        <td>{{ $course->course_name }}</td>
                        <td>{{ $course->instructor }}</td>
                        <td>{{ $course->duration }}</td>
                        <td>
                            <form action="{{ route('admin.courses.destroy', $course ) }}" method="POST" >

                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                            <a href="{{route('admin.courses.edit',$course)}}">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
