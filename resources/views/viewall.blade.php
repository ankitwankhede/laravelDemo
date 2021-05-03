@extends('layout')
@section('content')
<div class="container">
  <div class="row">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">First</th>
          <th scope="col">Last</th>
          <th scope="col">Email</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($data as $item)
        <tr>
          <td>{{$item->FirstName}}</td>
          <td>{{$item->LastName}}</td>
          <td>{{$item->Email}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection