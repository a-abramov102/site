@extends('layouts.app')
@section('content')
    <div class="row">
        @foreach($category as $item)
            <div class="col-12 col-sm-6 col-md-3 serviceCol">
                <div class="serviceUnit">
                    <div class="serviceImg">
                        <img src="#" alt="">
                    </div>
                    <div class="serviceName">
                        <h2>{{$item->title}}</h2>
                    </div>
                    <div class="serviceDesc">
                        {{$item->info}}
                    </div>
                    <div class="moreBtnWrap">
                        <a href="#" >Read more &#8702;</a>
                    </div>
                </div>
                <a  href="{{route('category.edit',['category'=>$item->id]) }}">
                    <button type="button" class="btn btn-secondary">Редактировать</button>
                </a>
            </div>
        @endforeach
    </div>
@endsection