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

        <form action="{{ route('admin.employees.update', $employee->id) }}" method="POST">
            @csrf
            @method('PUT');
            {{-- put: update an existing resource --}}
            <div style="display: flex; flex-direction:column; padding:20px">

                @csrf
                <label for="name">Title</label>
                <input type="text" name="title" id="" value="{{ $employee->name }}" style="padding:20px" required>

                <label for="email">Email</label>
                <input type="email" name="email" id="" value="{{ $employee->email }}" style="padding:20px" required>

                <label for="position">Position</label>
                <input type="text" name="position" id="" value="{{ $employee->position }}" style="padding:20px"
                    required>

                <button type="submit"
                    style="width: 10%; margin-top:5px; padding: 10px 20px; background-color: #007bff; color: white; border:none; border-radius: 5px;">Update</button>
            </div>
        </form>
    </div>
@endsection
