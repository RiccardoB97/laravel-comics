@extends('layout.app')

@section('title', 'Comic - Laravel-comics')

@section('content')
<section class="show">
    <div class="blue_bar">
        <div class="container_small">
            <a href="#"><img src="{{$comic['thumb']}}" alt=""></a>
        </div>
    </div>
    <div class="container_small">
        <div class="infos">
            <h1>{{$comic['title']}}</h1>
            <div class="buy">
                <div class="price">
                    <div class="us_price">
                        <span>U.S. Price:</span> $19.99
                    </div>
                    <div class="available">
                        <span>AVAILABLE</span>
                    </div>
                </div>
                <div class="check">
                    <a href="#">Check Availability</a>
                </div>
            </div>
            <div class="description">
                {{$comic['description']}}
            </div>
        </div>
    </div>
</section>
@endsection