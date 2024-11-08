@extends('layouts.app')

@section('title', 'About Page')

@section('content')
  <h1>About</h1>
  <p>Halaman ini memberikan informasi tentang perusahaan kami.</p>

  <div class="container-fluid">
    <div class="row">
    @for ($i = 1; $i < 10; $i++)
      <div class="col-ig-3 col-md-4 col-sm-6 col-12 my-3">
        <div class="card">
            <img src="{{ asset('default.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title {{ $i }}</h5>
                <p class="card-text">Some quick example text to build on the card title and make up tuhe bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go Somewhere</a>
            </div>
        </div>
      </div>
       @endfor
    </div>
  </div>
@endsection
