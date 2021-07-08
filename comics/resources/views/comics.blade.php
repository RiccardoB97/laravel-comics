@extends('layout.app')

@section('title', 'Comics - Laravel-comics')

@section('content')
    <section class="series">
        <div class="container">
            <a href='#' class="title">current series</a>
        </div>
        <div class="container cards">
            @foreach($comics as $comic)
            <div class="card">
                <div class="card_img">
                    <a href="#"><img src="{{$comic['thumb']}}" alt=""></a>
                </div>
                <h4>{{$comic['series']}}</h4>
            </div>
            @endforeach
        </div>
    </section>
@endsection