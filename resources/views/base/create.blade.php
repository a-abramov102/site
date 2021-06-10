@extends('layouts.app')


@section('content')
    <form  method="post" action="{{route('user.store')}}">
        @csrf
        <div class="mb-3">
            <label for="exampleInputName" class="form-label">Name</label>
            <input type="text" class="form-control" id="exampleInputName" value="" name="name">
        </div>
        @foreach($errors->get('name') as $message)
            <div class="alert alert-danger">{{$message}}</div>
        @endforeach
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="" name="email">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            @foreach($errors->get('email') as $message)
                <div class="alert alert-danger">{{$message}}</div>
            @endforeach
        </div>
        <div class="mb-3">
            <label for="exampleInputName" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword" value="" name="password">
            @foreach($errors->get('password') as $message)
                <div class="alert alert-danger">{{$message}}</div>
            @endforeach
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection