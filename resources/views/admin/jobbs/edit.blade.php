@extends('admin.layout.master')
@section('content')
    <h1>Blog</h1>

    <a class="btn btn-primary" href="{{ route('admin.movies.create') }}" style=" color:white">Create</a>

    <div class="table-responsive">
        <table class="table" style="width: 90%">
            <thead>
                <tr>
                    <th>id</th>
                    <th>job_title</th>
                    <th>name</th>
                    <th>email</th>
                    <th>cover_letter</th>

                </tr>
            </thead>
            <tbody>
                @foreajobbsjobb)
                    <tr>
                        <td>{{ $jobb->id }}</td>
                        <td>{{ $jobb->job_title }}</td>
                        <td>{{ $jobb->name }}</td>
                        <td>{{ $jobb->email }}</td>
                        <td>{{ $jobb->cover_letter}}</td>
                        <td>
                            <form action="{{ route('ajobbs.destrojobb ) }}" method="POST" >

                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                            <a href="{{route('admin.movies.edit',$movie)}}">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
