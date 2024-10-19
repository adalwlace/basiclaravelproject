@extends('admin.layout.master')
@section('content')
    <h1>Blog</h1>

    <a class="btn btn-primary" href="{{ route('admin.blogs.create') }}" style=" color:white">Create</a>

    <div class="table-responsive">
        <table class="table" style="width: 90%">
            <thead>
                <tr>
                    <th>id</th>
                    <th>title</th>
                    <th>author</th>
                    <th>content</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($blogs as $blog)
                    <tr>
                        <td>{{ $blog->id }}</td>
                        <td>{{ $blog->title }}</td>
                        <td>{{ $blog->author }}</td>
                        <td>{{ $blog->content }}</td>
                        <td>
                            <form action="{{ route('admin.blogs.destroy', $blog ) }}" method="POST" >

                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                            <a href="{{route('admin.blogs.edit',$blog)}}">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
