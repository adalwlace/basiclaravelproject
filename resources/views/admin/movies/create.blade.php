@extends('admin.layout.master')
@section('content')
    <h1>Create</h1>
    <form action="{{ route('admin.movies.index') }}" method="POST">
        <div style="display: flex; flex-direction:column; padding:20px">

            @csrf
            <label for="title">Title</label>
            <input type="text" name="title" id="" style="padding:20px">

            <label for="director">Director</label>
            <input type="text" name="director" id="" style="padding:20px">


            <label for="genre">Genre</label>
            <input type="text" name="genre" id="" style="padding:20px">

            <label for="release_date">Release Date</label>
            <input type="text" name="release_date" id="" style="padding:20px">

            <button
                style="width: 10%; margin-top:5px; padding: 10px 20px; background-color: #007bff; color: white; border:none; border-radius: 5px;">Create</button>
        </div>
    </form>
@endsection
