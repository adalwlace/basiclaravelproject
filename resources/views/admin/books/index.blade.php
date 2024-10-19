@extends('admin.layout.master')
@section('content')
    <h1>Books</h1>

    <a class="btn btn-primary" href="{{ route('admin.books.create') }}" style=" color:white">Create</a>

    <div class="table-responsive">
        <table class="table" style="width: 90%">
            <thead>
                <tr>
                    <th>id</th>
                    <th>title</th>
                    <th>author</th>
                    <th>isbn</th>
                    <th>description</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td>{{ $book->id }}</td>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->author }}</td>
                        <td>{{ $book->isbn }}</td>
                        <td>{{ $book->description }}</td>
                        <td>
                            <form action="{{ route('admin.books.destroy', $book ) }}" method="POST" >

                                @csrf
                                @ookhod('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                            <a href="{{route('admin.books.edit',$book)}}">Edit</a>
                        </td>


                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
