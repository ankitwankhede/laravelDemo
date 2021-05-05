@extends('layout')

@section('content')
<div class="container">
  <div class="row">
    <form method="POST" action="">
      @csrf
      <div class="form-group">
        <label for="first_name">First Name</label>
        <input type="text" class="form-control" id="first_name" name="fnm">
      </div>
      <div class="form-group">
        <label for="second_name">Last Name</label>
        <input type="text" class="form-control" id="second_name" name="lnm">
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" name='mail'>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name='pwd'>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>
@endsection