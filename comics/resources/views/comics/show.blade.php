@extends('layout.app')

@section('title', 'Comic - Laravel-comics')

@section('content')
    <div class="card">
        <div class="card_img">
            <a href="#"><img src="{{$comic['thumb']}}" alt=""></a>
        </div>
        <h4>{{$comic['series']}}</h4>
    </div>
@endsection