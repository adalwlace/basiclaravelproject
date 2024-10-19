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

        <form action="{{ route('admin.products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT');
            <div style="display: flex; flex-direction:column; padding:20px">

                @csrf
                <label for="name">Name</label>
                <input type="text" name="name" id="" value="{{ $product->name }}" style="padding:20px" required>

                <label for="price">Price</label>
                <input type="text" name="price" id="" value="{{ $product->price }}" style="padding:20px"
                    required>

                <label for="description">Description</label>
                <textarea name="description" id="" cols="30" rows="10" value="{{ $product->description }}" style="padding:20px"
                    required></textarea>

                <button type="submit"
                    style="width: 10%; margin-top:5px; padding: 10px 20px; background-color: #007bff; color: white; border:none; border-radius: 5px;">Update</button>
            </div>
        </form>
    </div>
@endsection
