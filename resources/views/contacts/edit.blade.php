@extends('layouts.app')
@section('main')
    <div class = "container">
        <div class="row justify-content-center">
            <div class= "col-sm-8">
                <div class="card mt-3 p-3">
                    <h3 class="text-muted">Contact Edit #{{$contact->firstname}}</h3>
                    <form method="POST" action="/contacts/{{$contact->id}}/update">
                        @csrf
                        @method('PUT')
                        <div class="form-goup">
                            <label>First Name</label>
                            <input type="text" name="firstname" class="form-control" value="{{old('firstname',$contact->firstname)}}"/>
                            @if($errors->has('firstname'))
                                <span class="text-danger">{{ $errors->first('firstname')}}</span>
                            @endif
                        </div>
                        <div class="form-goup">
                            <label>Last Name</label>
                            <input type="text" name="lastname" class="form-control" value="{{old('lastname',$contact->lastname)}}"/>
                            @if($errors->has('lastname'))
                                <span class="text-danger">{{ $errors->first('lastname')}}</span>
                            @endif
                        </div>
                        <div class="form-goup">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" value="{{old('email',$contact->email)}}" />
                            @if($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email')}}</span>
                            @endif
                        </div>
                        <div class="form-goup">
                            <label>Phone 1</label>
                            <input type="text" name="phone_1" class="form-control" value="{{old('phone_1',$contact->phone_1)}}"/>
                            @if($errors->has('phone_1'))
                                <span class="text-danger">{{ $errors->first('phone_1')}}</span>
                            @endif
                        </div>
                        <div class="form-goup">
                            <label>Phone 2</label>
                            <input type="text" name="phone_2" class="form-control" value="{{old('phone_2',$contact->phone_2)}}"/>
                            @if($errors->has('phone_2'))
                                <span class="text-danger">{{ $errors->first('phone_2')}}</span>
                            @endif
                        </div>
                        <div class="form-goup">
                            <label>Phone 3</label>
                            <input type="text" name="phone_3" class="form-control" value="{{old('phone_3',$contact->phone_3)}}"/>
                            @if($errors->has('phone_3'))
                                <span class="text-danger">{{ $errors->first('phone_3')}}</span>
                            @endif
                        </div>
                        <div class="form-goup">
                            <label>Notes</label>
                            <input type="text" name="notes" class="form-control" value="{{old('notes',$contact->notes)}}"/>
                            @if($errors->has('notes'))
                                <span class="text-danger">{{ $errors->first('notes')}}</span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-dark mt-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
