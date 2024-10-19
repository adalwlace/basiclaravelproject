@extends('admin.layout.master')
@section('content')
    <h1>Employee List</h1>

    <a class="btn btn-primary" href="{{ route('admin.employees.create') }}" style=" color:white">Create</a>

    <div class="table-responsive">
        <table class="table" style="width: 90%">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>email</th>
                    <th>position</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($employees as $employee)
                    <tr>
                        <td>{{ $employee->id }}</td>
                        <td>{{ $employee->name }}</td>
                        <td>{{ $employee->email }}</td>
                        <td>{{ $employee->position }}</td>
                        <td>
                            <form action="{{ route('admin.employees.destroy', $employee ) }}" method="POST" >

                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                            <a href="{{route('admin.employees.edit',$employee)}}">Edit</a>
                        </td>


                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
