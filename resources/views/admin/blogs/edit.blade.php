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

        <form action="{{ route('admin.blogs.update', $blog->id) }}" method="POST">
            @csrf
            @method('PUT');
            {{-- put: update an existing resource --}}
            <div style="display: flex; flex-direction:column; padding:20px">

                @csrf
                <label for="title">Title</label>
                <input type="text" name="title" id="" value="{{ $blog->title }}" style="padding:20px" required>

                <label for="content">Content</label>
                <textarea name="content" id="" cols="30" rows="10" value="{{ $blog->content }}" style="padding:20px"
                    required></textarea>

                <label for="author">Author</label>
                <input type="text" name="author" id="" value="{{ $blog->author }}" style="padding:20px"
                    required>

                <button type="submit"
                    style="width: 10%; margin-top:5px; padding: 10px 20px; background-color: #007bff; color: white; border:none; border-radius: 5px;">Update</button>
            </div>
        </form>
    </div>
@endsection
