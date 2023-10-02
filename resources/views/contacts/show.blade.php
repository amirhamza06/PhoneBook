@extends('layouts.app')
@section('main')
<div class="container">
    <div class="row" justify-content-center>
        <div class= "col-sm-8 mt-4">
            <div class= "card p-4">
                <p>Contact ID : <b>{{$contact->id}}</b></p>
                <p>First Name : <b>{{$contact->firstname}}</b></p>
                <p>Last Name : <b>{{$contact->lastname}}</b></p>
                <p>Email : <b>{{$contact->email}}</b></p>
                <p>Phone 1 : <b>{{$contact->phone_1}}</b></p>
                <p>Phone 2 : <b>{{$contact->phone_2}}</b></p>
                <p>Phone 3 : <b>{{$contact->phone_3}}</b></p>
                <p>Notes : <b>{{$contact->notes}}</b></p>
            </div>
        </div>
    </div>
</div>
@endsection