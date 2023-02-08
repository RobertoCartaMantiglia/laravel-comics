@extends('layouts.app')


@section('main-content')

<div class="container">
    <div class="row">
        @foreach($dccomics as $comic)
        <div class="col-2 p-4 m-2">
            <img src="{{ $comic['thumb']}}" alt="path">
            <div class="description">
                <h4>{{ $comic['series']}}</h4>
                <p class="fs-5">{{ $comic['price'] }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection