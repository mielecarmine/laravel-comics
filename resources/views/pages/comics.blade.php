@extends('layouts.app')

@section('page-title','Comics')

@section('main-content')
    <div class="container">
        <h1>Comics page</h1>
        <div class="row">
            @foreach ($comics as $comic)
                <div class="col-2">
                    <img class="img-fluid poster" src="{{ $comic['thumb'] }}" alt="">
                    <h2>{{ $comic['series'] }}</h2>
                </div>
            @endforeach
        </div>
    </div>
@endsection