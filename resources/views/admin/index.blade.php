@extends('layouts.app')
@section('content')
    <a href="{{route('user.index')}}"> Редактирование пользователей</a>
    <a href="{{route('category.index')}}"> Редактирование категорий</a>
    <a href="{{route('news.index')}}"> Редактирование новостей</a>
@endsection