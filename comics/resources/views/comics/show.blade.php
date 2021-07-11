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
        <div class="ad">
            <h4>ADVERTISEMENT</h4>
           <a href=""> <img src="../images/adv.jpg" alt=""></a>
        </div>
    </div>
    <section class="cast">
        <div class="container_small">
            <div class="talent">
                <div class="title">
                    <h3>Talent</h3>
                </div>
                <div class='datas'>
                    <div class="data_name">
                        <h5>Art by:</h5>
                    </div>
                    <div class="data">
                        @foreach($comic['artists'] as $artist)
                            <a href="">{{$artist}}</a>
                            @if(!$loop->last)
                                ,
                            @endif
                        @endforeach
                    </div>

                </div>
            </div>
            <div class="specs">
                <div class="title">
                    <h3>Specs</h3>
                </div>
            </div>
        </div>
    </section>
</section>
@endsection