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

        <form action="{{ route('admin.courses.update', $course->id) }}" method="POST">
            @csrf
            @method('PUT');
            {{-- put: update an existing resource --}}
            <div style="display: flex; flex-direction:column; padding:20px">

                @csrf
                <label for="course_name">Course Name</label>
                <input type="text" name="course_name" id="" value="{{ $course->course_name }}" style="padding:20px" required>

                <label for="instructor">Instructor</label>
                <input type="text" name="instructor" id="" value="{{ $course->instructor }}" style="padding:20px"
                    required>

                <label for="duration">Duration</label>
                <input type="text" name="duration" id="" value="{{ $course->duration }}" style="padding:20px"
                    required>

                <button type="submit"
                    style="width: 10%; margin-top:5px; padding: 10px 20px; background-color: #007bff; color: white; border:none; border-radius: 5px;">Update</button>
            </div>
        </form>
    </div>
@endsection

