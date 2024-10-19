@extends('admin.layout.master')
@section('content')
    <h1>Posts</h1>

    <a class="btn btn-primary" href="{{ route('admin.posts.create') }}" style=" color:white">Create</a>

    <div class="table-responsive">
        <table class="table" style="width: 90%">
            <thead>
                <tr>
                    <th>id</th>
                    <th>title</th>
                    <th>content</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->content }}</td>
                        <td>
                            <form action="{{ route('admin.posts.destroy', $post ) }}" method="POST" >

                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                            <a href="{{route('admin.posts.edit',$post)}}">Edit</a>
                        </td>


                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
