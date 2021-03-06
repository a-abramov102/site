@extends('layouts.app')

@section('content')
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
<table class="table table-dark">
  <thead>
    <a href="{{route('user.create')}}">Create user</a>
    <tr>
        <th scope="col">name</th>
        <th scope="col">email</th>
        <th scope="col">password</th>
        <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
  <div>
      <div class="mx-auto pull-right">
          <div class="">
              <form action="{{ route('user.index') }}" method="GET" role="search">
                  <div class="input-group">
                      <input type="search" class="form-control rounded" name="term" id="term" placeholder="Search" aria-label="Search" />
                      <button class="btn btn-primary" type="submit" title="Search">
                          <span class="fas fa-search">Search</span>
                      </button>
                  </div>
              </form>
          </div>
      </div>
  </div>

  @foreach($users as $user)
      <tr>
          <td>{{$user->name}}</td>
          <td>{{$user->email}}</td>
          <td>{{$user->password}}</td>
          <td id="{{$user->id}}">
              <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                  <a class="btn btn-primary" href="{{route('user.edit',['user'=>$user]) }}">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                          <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                      </svg>
                  </a>
                  <form action="{{route('user.destroy',['user'=>$user])}}" method="POST">
                      @method('delete')
                      @csrf
                      <button class="btn btn-danger" href="">
                          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                              <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                              <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                          </svg>
                      </button>
                  </form>

              </div>
          </td>
      </tr>
  @endforeach
  </tbody>
</table>
@endsection
