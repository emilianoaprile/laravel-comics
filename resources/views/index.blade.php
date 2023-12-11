@extends('layouts.app')

@section('content')

<section>
  <div class="container">
    <h1>CURRENT SERIES</h1>
  </div>
  <div class="container">
    <div class="row">
        @foreach ($comics as $comic)
            <div class="col-2">{{ $comic['series'] }}</div>
        @endforeach
    
    </div>
  </div>
</section>

@endsection

@section('title')
Home Page
@endsection