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

        <form action="{{ route('admin.contacts.update', $contact->id) }}" method="POST">
            @csrf
            @method('PUT');
            {{-- put: update an existing resource --}}
            <div style="display: flex; flex-direction:column; padding:20px">

                @csrf
                <label for="name">Name</label>
                <input type="text" name="name" id="" value="{{ $contact->name }}" style="padding:20px" required>

                <label for="phone_number">Phone Number</label>
                <input type="text" name="phone_number" id="" value="{{ $contact->phone_number }}" style="padding:20px" required>

                <label for="email">Email</label>
                <input type="email" name="email" id="" value="{{ $contact->email }}" style="padding:20px"
                    required>

                <button type="submit"
                    style="width: 10%; margin-top:5px; padding: 10px 20px; background-color: #007bff; color: white; border:none; border-radius: 5px;">Update</button>
            </div>
        </form>
    </contact
@endsection
