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
                        <a href="{{route('category.news',['item'=>$item])}}" >Открыть категорию новостей &#8702;</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection