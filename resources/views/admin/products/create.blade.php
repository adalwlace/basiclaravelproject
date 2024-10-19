@extends('admin.layout.master')
@section('content')
    <h1>Create</h1>
    <form action="{{ route('admin.products.index') }}" method="POST">
        <div style="display: flex; flex-direction:column; padding:20px">

            @csrf
            <label for="name">Name</label>
            <input type="text" name="name" id="" style="padding:20px">

            <label for="price">Price</label>
            <input type="text" name="price" id="" style="padding:20px">

            <label for="description">Description</label>
            <textarea name="description" id="" cols="30" rows="10" style="padding:20px"></textarea>

            <button
                style="width: 10%; margin-top:5px; padding: 10px 20px; background-color: #007bff; color: white; border:none; border-radius: 5px;">Create</button>
        </div>
    </form>
@endsection
