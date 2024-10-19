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

        <form action="{{ route('admin.movies.update', $movie->id) }}" method="POST">
            @csrf
            @method('PUT');
            {{-- put: update an existing resource --}}
            <div style="display: flex; flex-direction:column; padding:20px">

                @csrf
                <label for="title">Title</label>
                <input type="text" name="title" id="" value="{{ $movie->title }}" style="padding:20px" required>

                <label for="director">Director</label>
                <input type="text" name="director" id="" value="{{ $movie->director }}" style="padding:20px"
                    required>

                <label for="genre">Genre</label>
                <input type="text" name="genre" id="" value="{{ $movie->genre }}" style="padding:20px"
                    required>

                <label for="release_date">Release Date</label>
                <input type="text" name="release_date" id="" value="{{ $movie->release_date }}" style="padding:20px"
                    required>

                <button type="submit"
                    style="width: 10%; margin-top:5px; padding: 10px 20px; background-color: #007bff; color: white; border:none; border-radius: 5px;">Update</button>
            </div>
        </form>
    </div>
@endsection
