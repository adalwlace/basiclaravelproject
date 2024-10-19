@extends('admin.layout.master')
@section('content')
    <h1>Contacts</h1>

    <a class="btn btn-primary" href="{{ route('admin.contacts.create') }}" style=" color:white">Create</a>

    <div class="table-responsive">
        <table class="table" style="width: 90%">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>phone_number</th>
                    <th>email</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                    <tr>
                        <td>{{ $contact->id }}</td>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->phone_number }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>
                            <form action="{{ route('admin.contacts.destroy', $contact ) }}" method="POST" >

                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                            <a href="{{route('admin.contacts.edit',$contact)}}">Edit</a>
                        </td>


                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
