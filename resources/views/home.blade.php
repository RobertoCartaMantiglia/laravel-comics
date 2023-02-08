@extends('layouts.app')


@section('main-content')

<div class="container">
    <div class="row">
        @foreach($dccomics as $element)
        <div class="col-2 p-4">
            <img src="" alt="path">
            <div class="description">
                <h4>{{ $element->title}}</h4>
                <p class="fs-5">{{ $element->price }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection