@extends('admin.layout.master')
@section('content')
    <h1>Blog</h1>

    <a class="btn btn-primary" href="{{ route('admin.movies.create') }}" style=" color:white">Create</a>

    <div class="table-responsive">
        <table class="table" style="width: 90%">
            <thead>
                <tr>
                    <th>id</th>
                    <th>title</th>
                    <th>director</th>
                    <th>genre</th>
                    <th>release_date</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($movies as $movie)
                    <tr>
                        <td>{{ $movie->id }}</td>
                        <td>{{ $movie->title }}</td>
                        <td>{{ $movie->director }}</td>
                        <td>{{ $movie->genre }}</td>
                        <td>{{ $movie->release_date }}</td>
                        <td>
                            <form action="{{ route('admin.movies.destroy', $movie ) }}" method="POST" >

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
