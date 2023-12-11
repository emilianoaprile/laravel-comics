@extends('layouts.app')

@section('content')

<section>
  <div class="container">
    <h1>CURRENT SERIES</h1>
  </div>
  <div class="container">
    <div class="row">
        @foreach ($comics as $comic)
            <div class="col-2 p-3">
                <img src="{{ $comic['thumb'] }}" alt="" class="comic-img">
                {{ $comic['series'] }}
            </div>
            
        @endforeach
    </div>
  </div>
</section>

@endsection

@section('title')
Home Page
@endsection 