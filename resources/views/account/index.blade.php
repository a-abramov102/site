@extends('layouts.app')

@section('content')
        <h2>Привет {{Auth::user()->name}}, ты в порядке?</h2>
@endsection