@extends('layouts.app')
@section('main')
    <div class = "container">
        <div class="text-right">
            <a href="contacts/create" class= "btn btn-dark mt-2">New Contact</a>
        </div>
        <table class="table table-hover mt-2">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone 1</th>
                <th>Phone 2</th>
                <th>Phone 3</th>
                <th>Notes</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contacts as $contact)
            <tr>
                <td>{{$loop->index+1}}</td>
                <td><a href="contacts/{{$contact->id}}/show" class= "text-dark">{{$contact->firstname}}</td>
                <td>{{$contact->lastname}}</a></td>
                <td>{{$contact->email}}</td>
                <td>{{$contact->phone_1}}</td>
                <td>{{$contact->phone_2}}</td>
                <td>{{$contact->phone_3}}</td>
                <td>{{$contact->notes}}</td>
                <td><a href="contacts/{{$contact->id}}/edit" class="btn btn-dark btn-sm">Edits</a>
                    <form method="POST" class="d-inline" action="contacts/{{$contact->id}}/delete">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class= "btn btn-danger btn-sm">Delete</button>
                    </form>
                </td> 
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$contacts->links()}}
    </div>
@endsection