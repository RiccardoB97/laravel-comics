@extends('layout.app')

@section('title', 'Comics - Laravel-comics')

@section('content')
    <section class="series">
        <div class="container">
            <a href='#' class="title">current series</a>
        </div>
        <div class="container cards">
            @foreach($comics as $index => $comic)
            <div class="card">
                <div class="card_img">
                    <a href="{{route('comic', ['id' => $index])}}"><img src="{{$comic['thumb']}}" alt=""></a>
                </div>
                <h4>{{$comic['series']}}</h4>
            </div>
            @endforeach
        </div>
        <div class="load">
            <a href="#">LOAD MORE</a>
        </div>
    </section>
    <section class="shop-wrap">
        <div class="container">
            <div class="shop">
                <div class="buy">
                    <img src="../images/buy-comics-digital-comics.png" alt=""> <span>DIGITAL COMICS</span>
                </div>
                <div class="buy">
                    <img src="../images/buy-comics-merchandise.png" alt=""> <span>DC MERCHANDISE</span>
                </div>
                <div class="buy">
                    <img src="../images/buy-comics-subscriptions.png" alt=""> <span>SUBSCRIPTION</span>
                </div>
                <div class="buy">
                    <img src="../images/buy-comics-shop-locator.png" alt=""> <span>COMIC SHOP LOCATOR</span>
                </div>
                <div class="buy">
                    <img src="../images/buy-dc-power-visa.svg" alt=""> <span>DC POWER VISA</span>
                </div>
            </div>
        </div>
    </section>
@endsection