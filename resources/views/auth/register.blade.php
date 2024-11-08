@extends('layouts.app')

@section('title', 'Login')

@section('content')
<form action="">
    <h1 class="mb-4">Register</h1>
    <div class="mb-4">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
      </div>
      <div class="mb-4">
        <label for="exampleFormControlInput1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan password">
      </div>
      <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-primary w-100" style="max-width: 200px;">Register</button>
      </div>
</form>
@endsection
